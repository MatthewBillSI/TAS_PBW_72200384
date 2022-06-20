<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mahasiswa;

class Mahasiswacontroler extends Controller
{
    public function mahasiswa()
    {
        $mahasiswa = mahasiswa::orderBy('id','desc')->paginate(10);
        
        return view('mahasiswa',['mahasiswa' => $mahasiswa]);
    }
    
    public function pencaarian(Request $request)
    {
        $cari = $request->cari;
        $mahasiswa = mahasiswa::where('nama','like','%'.$cari.'%')->orwhere('nim','like','%'.$cari.'%')->paginate();
        return view('mahasiswa',['mahasiswa' => $mahasiswa]);
    }
    public function countdata(Request $request)
    {
        $mahasiswa = mahasiswa::paginate(10);
        
        return view('mahasiswa',count("mahasiswa"));
    }
    public function total(Request $request)
    {
        $mahasiswa = mahasiswa::paginate(10);
        
        return view('mahasiswa',compact("mahasiswa"));
    }
    
    public function inputmhs(Request $request)
    {
        //$bidang = implode(",", $request->input(array(bidang)));        
        mahasiswa::create([
            'nim' => $request->nim, 
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => implode(",", $request->input(array('bidang')))
        ]);
        return redirect("/mahasiswa")-> with('alert','berhasil disimpan');
    }

    public function editmhs($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('formulirupdate',['mahasiswa' => $mahasiswa]);
    }

    public function updatemhs($id,Request $request)
    {
        //$bidang = implode(",", $request->input(array(bidang)));        
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->nim = $request->nim; 
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan ;
        $mahasiswa->bidang_minat = implode(",", $request->input(array('bidang')));
        $mahasiswa->save();
        return redirect("/mahasiswa")->with('update','berhasil diupdate');
    }
    public function deletemhs($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa ->delete();
        return redirect("/mahasiswa")->with('delete','data berhasil dihapus');
    }
}