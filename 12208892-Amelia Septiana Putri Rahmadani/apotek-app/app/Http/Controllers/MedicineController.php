<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $medicines = Medicine::all(); //boleh memakai get dan all
        
    //     return view('medicine.index', compact('medicines'));
    //     // Menampilkan halaman blade
    //     // medicine.index (posisi nama view)
    //     //awalnya jangan memakai compact dulu
    //     //compact untuk muncul di views nya

    //     // $query = Order::with('user');

    //     // if ($request->has('data')) {
    //     //     $data = $request->data;
    //     //     $query->whereDate('created_at', $tanggalFilter);
    //     // }

    //     // $orders = $query->simplePaginate(10);

    // }
    public function index(Request $request)
    {
        $query = Medicine::query();

        if ($request->has('data')) {
            $data = $request->data;
            $query->Where('name', 'like', "%$data%")
                  ->orWhere('type', 'like', "%$data%")
                  ->orWhere('price', 'like', "%$data%")
                  ->orWhere('stock', 'like', "%$data%");
        }

        $medicines = $query->get();

        return view('medicine.index', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicine.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|min:3',
            'type' => 'required', //required:form harus diisi
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
        ]);

        Medicine::create([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);

        return redirect()->back()->with('success', 'Berhasil Menambahkan Data Obat !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine, $id)
    {
       
        $medicine = Medicine::find($id);

        return view('medicine.edit', compact('medicine'));
        //'medicine.edit' untuk pemanggilan datantas
        // compact untuk menampilan datanya
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine $medicine, $id)
    {
        $request->validate([
            'name' => 'required|min:3',
            'type' => 'required',
            'price' => 'required|numeric',
        ]);

        Medicine::where('id', $id)->update([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
        ]);

        return redirect()->route('medicine.home')->with('success', 'Berhasil Update Data Obat !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine, $id)
    {
        Medicine::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'Data Berhasil Dihapus !');
    }

    public function stock()
    {
        $medicines = Medicine::orderBy('stock', 'ASC')->get();

        return view('medicine.stock', compact('medicines'));
    }

    public function stockEdit($id)
    {
        $medicine = Medicine::find($id);

        return response()->json($medicine);
    }

    public function stockUpdate(Request $request, $id)
    {
        $request->validate([
            'stock' => 'required|numeric',
        ]);

        $medicine = Medicine::find($id);

        if ($request->stock <= $medicine['stock']) {
            return response()->json(["message" => "Stock yang diinput tidak boleh kurang dari stock sebelumnya"], 400);
        } else {
            $medicine->update(['stock' => $request->stock]);
            return response()->json("berhasil", 200);
        }
    }
}
