<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {      
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            // 'password' => 'required',
            'role' => 'required',
        ]);

        $password = substr($request->email, 0, 3) . substr($request->name, 0, 3);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $password,

        ]);


        return redirect()->back()->with('success', 'Berhasil menambahkan data user!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
     

        if($request->password == null){
            $passwordBaru = $request->passwordLama;
        }else{
            $passwordBaru = hash::make($request->password);
        }
        // $siswa = User::find($id);

        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            // 'password' => 'required',
            // 'role' => 'required',
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $passwordBaru
        ]);

        return redirect()->route('user.home')->with('success', 'Berhasil mengubah data!');

    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->back()->with('deleted', 'Berhasil menghapus data!');
    }


    // ===================================================================
    public function homePage()
    {
        $users1 = User::where('role', 'admin')->get()->count();
        $users2 = User::where('role', 'cashier')->get()->count(); 
        $detail_medicine = Medicine::all()->count();

        // dd($detail_medicine);
        return view('home', ['admin' => $users1, 'kasir' => $users2, 'dataobat' => $detail_medicine]);
    }
    // ==================================================================

    public function loginAuth(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);


        $user = $request->only(['email', 'password']);
        if(Auth::attempt($user)){
            return redirect()->route('home.page');
        }else{
            return redirect()->back()->with('failed', 'Proses login gagal');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login.auth2')->with('logout', 'Anda telah logout');
    }



}
