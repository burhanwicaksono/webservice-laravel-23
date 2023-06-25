<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //menampilkan data user
    // /
    public function index(){
        $user = User::all();
        return $user;
    }

    public function store(Request $request){
        try {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
       
        $pesan = "Tambah Data Sukses";
        return response($pesan,200);
        
        } catch(\Throwable $th){
        $pesan = array("pesan"=>$th->getMessage());
        return response($pesan,500);
        }
    }  

    public function update(Request $request){
        try {
        $user = User::find($request->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        $pesan = "Update Berhasil";
        return response($pesan,200);

        } catch(\Throwable $th){
        $pesan = array("pesan"=>$th->getMessage());
        return response($pesan,500);
        }
    }  

    public function destroy(Request $request){
        try {
        $user = User::find($request->id);
        $user->delete();
        
        $pesan = "Hapus Data Berhasil";
        return response($pesan,200);

        } catch(\Throwable $th){
        $pesan = array("pesan"=>$th->getMessage());
        return response($pesan,500);
        }
    }
}
