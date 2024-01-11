<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gurus = User::where('role','guru')->get();
        // $guru = User::where('role', 'staff')->get();
        return view('guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi  data yang di inpuut
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email',
        ]);

        $password = substr($request->email, 0 ,3) . substr($request->name, 0, 3);
        

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($password),
            'role' => 'guru',
        ]);
        return redirect()->route('guru.index')->with('success', 'Berhasil menambah data');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //
        $guru = User::find($id);

        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $guru = User::find($id);

        if (!$guru) {
        return redirect()->route('guru.index')->with('error', 'Akun tidak ditemukan.');
        }

        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        if ($request->password) {
             // $password = substr($request->email, 0, 3).substr($request->name, 0, 3);
        $guru->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
         ]);
        } else {
        $guru->update([
            'name' => $request->name,
            'email' => $request->email,
    ]);
}
        return redirect()->route('guru.index')->with('success','Berhasil Mengubah Data Guru!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'Berhasil Menghapus Data!');
    }

}
