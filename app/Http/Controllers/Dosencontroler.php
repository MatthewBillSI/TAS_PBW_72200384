<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\dosen;

class Dosencontroler extends Controller
{
    public function dosen()
    {
        $dosen = dosen::orderBy('id','desc')->paginate(10);
        
        return view('dosen',['dosen' => $dosen]);
    }
    
    public function pencaarian(Request $request)
    {
        $cari = $request->cari;
        $dosen = dosen::where('nama','like','%'.$cari.'%')->orwhere('nidn','like','%'.$cari.'%')->paginate();
        return view('dosen',['dosen' => $dosen]);
    }
    public function countdata(Request $request)
    {
        $dosen = dosen::paginate(10);
        
        return view('dosen',count("dosen"));
    }
    public function total(Request $request)
    {
        $dosen = dosen::paginate(10);
        
        return view('dosen',compact("dosen"));
    }
    
    public function inputdsh(Request $request)
    {
        //$bidang = implode(",", $request->input(array(bidang)));        
        dosen::create([
            'nidn' => $request->nidn, 
            'nama' => $request->nama,
            'status' => $request->status,
            'jafung' => $request->jafung,
            'pakar' => implode(",", $request->input(array('pakar')))
        ]);
        return redirect("/dosen");
    }

    public function editdsh($id)
    {
        $dosen = dosen::find($id);
        return view('formulirupdatedosen',['dosen' => $dosen]);
    }

    public function updatedsh($id,Request $request)
    {
        //$bidang = implode(",", $request->input(array(bidang)));        
       $dosen = dosen::find($id);
        $dosen->nidn = $request->nidn; 
        $dosen->nama = $request->nama;
        $dosen->status = $request->status;
        $dosen->jafung = $request->jafung;
        $dosen->pakar = implode(",", $request->input(array('pakar')));
        $dosen->save();
        return redirect("/dosen");
    }
}