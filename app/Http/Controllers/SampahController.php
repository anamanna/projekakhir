<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampahController extends Controller
{
    public function index(){
        $dataSampahFromDB = DB::table('jenis_sampah')->get();


    //kembalikan view ke user
    return view('app.manajemen_sampah.index',[
    "dataSampah"      => $dataSampahFromDB
    ]);    
}

    public function create(){        
        return view('app.manajemen_sampah.create');
    }

    public function store(Request $request)
    {
        DB::table('jenis_sampah')->insert([
            'nama' => $request->nama,
            'harga_per_kilo' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
        ]);

        return redirect('indexsampah');
    }

    public function edit($id){
        $datasampah = DB::table('jenis_sampah')->where('id',$id)->get();
        return view('app.manajemen_sampah.edit',['datasampah'=>$datasampah]);
    }

    public function update(Request $request)
    {
        DB::table('jenis_sampah')->where('id',$request->id)->update([
            'id' => $request->id,
            'nama' => $request->nama,
            'harga_per_kilo' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar,
        ]);
        return redirect('/indexsampah'); 
    }
    public function destroy($id)
    {
    	DB::table('jenis_sampah')->where('id',$id)->delete();

        return redirect('/indexsampah');
    }
}
