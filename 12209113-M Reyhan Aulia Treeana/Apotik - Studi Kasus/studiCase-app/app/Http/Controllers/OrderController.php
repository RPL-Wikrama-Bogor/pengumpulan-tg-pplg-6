<?php

namespace App\Http\Controllers;

    use PDF;
// use Excel;
use App\Models\Order;
use App\Models\Medicine;
use App\Exports\OrdersExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengambil seluruh data pada table orders dengan pagination per halaman 10 data serta mengambil hasil data relasi function bernama user pada model order
        $orders = Order::with('user')->simplePaginate(10);
        if(Auth::user()->role == 'admin'){
            return view('order.admin.index', compact('orders'));
        }else{
            return view('order.kasir.index', compact('orders')); 
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicines = Medicine::all();

        return view('order.kasir.create', compact('medicines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_customer' => 'required',
            'medicines' => 'required',
        ]);

        $arrayDistinct = array_count_values($request->medicines);

        $arrayAssocMedicines = [];

        foreach ($arrayDistinct as $id => $count){
            $medicine = Medicine::where('id', $id)->first();

            $subPrice = $medicine['price'] * $count;

            $arrayItem = [
                "id" => $id,
                "name_medicine" => $medicine['name'],
                "qty" => $count,
                "price" => $medicine['price'],
                "sub_price" => $subPrice,
            ];

            array_push($arrayAssocMedicines, $arrayItem);
        }

        $totalPrice = 0;

        foreach($arrayAssocMedicines as $item) {
            $totalPrice += (int)$item['sub_price'];
        }

        $priceWithPPN = $totalPrice + ($totalPrice * 0.1);

        $proses = Order::create([
            'user_id' => Auth::user()->id,
            'medicines' => $arrayAssocMedicines,
            'name_customer' => $request->name_customer,
            'total_price' => $priceWithPPN,
        ]);

        if($proses) {
            $order = Order::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->first();

            return redirect()->route('kasir.order.print', $order['id']);
        }else{
            return redirect()->back()->with('failed', 'Gagal membuat data pembelian, silahkan coba kembali dengan data yang sesuai');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = Order::find($id);
        return view('order.kasir.print', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function downloadPDF($id) 
    { 
        // ambil data yg akan ditampilkan pada pdf, bisa juga dengan where atau eloquent lainnya dan jangan gunakan pagination
        $order = Order::find($id)->toArray(); 
        // kirim data yg diambil kepada view yg akan ditampilkan, kirim dengan inisial 
        view()->share('order',$order); 
        // panggil view blade yg akan dicetak pdf serta data yg akan digunakan
        $pdf = PDF::loadView('order.kasir.download-print', $order); 
        // download PDF file dengan nama tertentu
        return $pdf->download('receipt.pdf'); 
    }

    public function user(){

    }

    public function search(Request $request){

        $request->validate([
            'src' => 'required',
        ]);

        $search = $request->src;

        $orders = Order::where('name_customer', 'LIKE', '%' . $search . '%')
        ->OrWhere('medicines', 'LIKE', '%' . $search . '%')
        ->OrWhere('created_at', 'LIKE', '%' . $search . '%')->simplePaginate(10);

        // $orders = Order::where('name_customer', 'LIKE', '%' . $search . '%')->simplePaginate(10);

        // $cuy = $orders->count() < 1;

        // if($cuy){
        //     $orders = Order::where('medicines', 'LIKE', '%' . $search . '%')->simplePaginate(10);
        // }elseif(!$cuy){
        //     $orders = Order::where('created_at', 'LIKE', '%' . $search . '%')->simplePaginate(10);
        // }
        

        
        
        // $orders = Order::where('created_at', 'LIKE', '%' . $search)->simplePaginate(10);

        return view('order.kasir.index', compact('orders'));
    }

    public function data()
    {
        $orders = Order::with('user')->simplePaginate(5);
        return view("order.admin.index", compact('orders'));
    }

    public function exportExcel()
    {
        $file_name = 'data_pembelian'.'.xlsx';

        return Excel::download(new OrdersExport, $file_name, \Maatwebsite\Excel\Excel::XLSX);
    }
}
