<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posting;


class PostingController extends Controller
{
    //menampilkan data user
    // /
    public function index(){
        $posting = Posting::all();
        return $posting;
    }
    
    public function store(Request $request){
        try {
        $posting = new Posting();
        $posting->posting = $request->posting;
        $posting->save();
       
        $pesan = "Posting Sukses";
        return response($pesan,200);
        
        } catch(\Throwable $th){
        $pesan = array("pesan"=>$th->getMessage());
        return response($pesan,500);
        }
    }  

    public function update(Request $request){
        try {
        $posting = Posting::find($request->id);
        $posting->posting = $request->posting;
        $posting->save();
        
        $pesan = "Posting Berhasil di Update";
        return response($pesan,200);

        } catch(\Throwable $th){
        $pesan = array("pesan"=>$th->getMessage());
        return response($pesan,500);
        }
    }  

    public function destroy(Request $request){
        try {
        $posting = Posting::find($request->id);
        $posting->delete();
        
        $pesan ="Posting berhasil dihapus";
        return response($pesan,200);

        } catch(\Throwable $th){
        $pesan = array("pesan"=>$th->getMessage());
        return response($pesan,500);
        }
    }
}
