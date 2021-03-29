<?php

namespace App\Http\Controllers;

use App\Models\Meja; 
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function index()
    {
        $meja = Meja::all();

        if(count($meja) > 0) {
            return response([
                'message' => 'Retrieve meMejaja Success',
                'data' => $meja
            ], 200);
        }

        return response([
            'message' => 'Empty Data',
            'data' => null
        ], 404);
    }

    public function cari($id)
    {
        $meja = Meja::findOrFail($id);

        // if(is_null($meja))
        //     return response(['message' => 'Meja tidak ditemukan!'], 404);
        
        return response([
            'message' => 'Retrieve Meja Success',
            'data' => $meja
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $updateData = $request->all();
        $meja = Meja::findOrFail($id);

        if(isset($updateData['aktif']))
            $meja->aktif = $updateData['aktif'];
        
        if($meja->save()) 
        {
            return response([
                'message' => 'Update Meja berhasil!',
                'data' => $meja
            ], 200);
        }
    }

    public function create(Request $request)
    {
        Meja::create();

        return response(['message' => 'Tambah Meja Berhasil'], 201);
    }

    public function hapusData($id)
    {
        $meja = Meja::find($id);

        if(is_null($meja))
            return response(['message' => 'Meja tidak ditemukan!'], 404);
        
        $meja->aktif = 0;

        if($meja->save()) 
            return response(['message' => 'Hapus Meja berhasil!'], 200);
        
        return response(['message' => 'Hapus Meja gagal!',], 400);
    }

    public function aktifData($id)
    {
        $meja = Meja::find($id);

        if(is_null($meja))
            return response(['message' => 'Meja tidak ditemukan!'], 404);
    
        $meja->aktif = 1;

        if($meja->save()) 
            return response(['message' => 'Aktivasi Meja berhasil!'], 200);
        
        return response(['message' => 'Aktivasi Meja gagal!',], 400);
    }
}
