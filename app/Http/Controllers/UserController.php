<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.createuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'jabatan' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required',
                'foto' => 'required|image|mimes:jpg,png,gif,jpeg|max:2048',
            ],
            [
                'nama.required' => 'nama Tidak Boleh Kosong',
                'email.required' => 'email Wajib Diisi',
                'email.unique' => 'email sudah terdaftar',
                'password.required' => 'password Diisi ya !!!',
                'password.min' => 'password minimal 8 karakter!!!',
                'foto.mimes' => 'foto extension hanya jpg,png,gif,jpeg!',
                'foto.max' => 'foto maximum 2mb!',
            ]
              );
        $path = $request->file('foto')->store('public/image');
        $users = new User();
        $users->nama = $request['nama'];
        $users->email = $request['email'];
        $users->password = Hash::make($request['password']);
        $users->jabatan = $request['jabatan'];
        $users->foto = basename($path);
        $users->save();

        return redirect('/user')->with('status','Selamat Data User Sudah Di Tambahkan');

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
    public function edit(string $id)
    {

        $User = User::find($id);
        return view('user.updateuser', compact('User'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'nama' => 'required',
                'jabatan' => 'required',
                'email' => 'required',
                'foto' => 'image|mimes:jpg,png,gif,jpeg|max:2048',
            ]

        );
        if ($request->file('foto')) {
            if ($request->foto_lama) {
                storage::delete($request->foto_lama);
            }
            $path = $request->file('foto')->store('public/image');
        }else{
            $path =$request->foto_lama;
        }

        $users = User::find($id);
        $users->jabatan = $request['jabatan'];
        $users->nama = $request['nama'];
        $users->foto = basename($path);
        $users->email = $request['email'];
        
        $users->save();
        return redirect('/user')->with('status','Selamat Data User Sudah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy('id', $id);
        return redirect('/user');
    }
}
