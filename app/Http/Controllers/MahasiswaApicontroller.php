<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mahasiswa;

class MahasiswaApicontroller extends Controller
{
    public function all()
    {
        $mahasiswa = mahasiswa::all();
        
        return response()->json(['data' => $mahasiswa]);
    }
    public function create(Request $request)
    {
        $mahasiswa=mahasiswa::create([
            'nim' => $request->nim, 
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);
        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'berhasil disimpan',
            ], 200);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'gagal disimpan',
            ], 400);
        }
    }

    public function update(Request $request)
    {
        $mahasiswa= mahasiswa::whereId($request->id)->update([
            'nim' => $request->nim, 
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);
        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'berhasil update',
            ], 200);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'gagal update',
            ], 400);
        }
    }

    public function update2($id, Request $request)
    {
        $mahasiswa= mahasiswa::whereId($request->id)->update([
            'nim' => $request->nim, 
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]);
        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'berhasil update',
            ], 200);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'gagal update',
            ], 400);
        }
    }

    public function delete($id)
    {
        
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa ->delete();

        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'berhasil delete',
            ], 200);
        } else{
            return response()->json([
                'success' => false,
                'message' => 'gagal delete',
            ], 400);
        }
    }


}
