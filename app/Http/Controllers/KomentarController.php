<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarController extends Controller
{
    //menampilkan data user
    // /
    public function index(){
        $komentar = Komentar::find($id);
        return $komentar;
    }
    
    public function store(Request $request){
        try {
        $komentar = new Komentar();
        $komentar->komentar = $request->komentar;
        $komentar->save();
       
        $pesan = "Sukses tambahkan komentar";
        return response($pesan,200);
        
        } catch(\Throwable $th){
        $pesan = array("pesan"=>$th->getMessage());
        return response($pesan,500);
        }
    }  

    public function update(Request $request){
        try {
        $komentar = Komentar::find($request->id);
        $komentar->komentar = $request->komentar;
        $komentar->save();
        
        $pesan = "Komentar Berhasil di Update";
        return response($pesan,200);

        } catch(\Throwable $th){
        $pesan = array("pesan"=>$th->getMessage());
        return response($pesan,500);
        }
    }  

    public function destroy(Request $request){
        try {
        $komentar = Komentar::find($request->id);
        $komentar->delete();
        
        $pesan ="Komentar berhasil dihapus";
        return response($pesan,200);

        } catch(\Throwable $th){
        $pesan = array("pesan"=>$th->getMessage());
        return response($pesan,500);
        }
    }
}
