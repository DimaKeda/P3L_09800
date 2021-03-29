<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class BahanController extends Controller
{
    public function indexAll()
    {
        $bahan = Bahan::all();

        if(count($bahan) > 0) 
        {
            return response([
                'message' => 'Retrieve Bahan Success',
                'data' => $bahan
            ], 200);
        }

        return response([
            'message' => 'Empty Data',
            'data' => null
        ], 404);
    }

    public function cariBerdasarkanIdMenu($id) 
    {
        $bahan = Bahan::whereHas('getMenuRelation', function($query) use($id){
            $query->where('id', $id);
        })->get();

        if(count($bahan) > 0) 
        {
            return response([
                'message' => 'Retrieve Bahan Success',
                'data' => $bahan
            ], 200);
        }

        return response([
            'message' => 'Empty Data',
            'data' => null
        ], 404);

    }

    public function create(Request $request)
    {
        $storeData = $request->all();

        $validate = Validator::make($storeData, [
            'nama' => 'required|max:60',
            'serving_size' => 'required|numeric',
            'unit' => 'required',
            'remaining_stock' => 'required|numeric',
        ]);
        
        if($validate->fails())
            return response(['message' => $validate->errors()], 400);
        
        $bahan = Bahan::create($storeData);

        return response(['message' => 'Registrasi Bahan Berhasil'], 201);
    }

    public function update(Request $request, $id)
    {
        $updateData = $request->all();
        $bahan = Bahan::findOrFail($id);

        if(isset($updateData['nama']))
            $bahan->nama = $updateData['nama'];
        
        if(isset($updateData['serving_size']))
            $bahan->serving_size = $updateData['serving_size'];
        
        if(isset($updateData['unit']))
            $bahan->unit = $updateData['unit'];
        
        if(isset($updateData['remaining_stock']))
            $bahan->remaining_stock = $updateData['remaining_stock'];
        
        if($bahan->save()) 
        {
            return response([
                'message' => 'Bahan berhasil di update',
                'data' => $bahan
            ], 200);
        }

        return response(['message' => 'Bahan gagal di update!'], 400);
    }

    public function updateBulk(Request $request)
    {
        $updateData = $request->all();

        if(isset($updateData['id_bahan_array']))
        {
            DB::table('bahan')->whereIn('id', $updateData['id_bahan_array'])
                ->update(['id_menu' => $updateData['id_menu']]);
               
            
            return response(['message' => 'tambah id menu bulk berhasil!'], 200);
        }

        return response(['message' => 'tidak ada yang di update'], 400);
    }

    public function hapusData($id)
    {
        $bahan = Bahan::find($id);

        if(is_null($bahan))
            return response(['message' => 'Bahan tidak ditemukan!'], 404);
        
        $bahan->aktif = 0;

        if($bahan->save()) 
            return response(['message' => 'Hapus bahan berhasil!'], 200);
        
        return response(['message' => 'Hapus bahan gagal!',], 400);
    }

    public function aktifData($id)
    {
        $bahan = Bahan::find($id);

        if(is_null($bahan))
            return response(['message' => 'bahan tidak ditemukan!'], 404);
    
        $bahan->aktif = 1;

        if($bahan->save()) 
            return response(['message' => 'Aktivasi bahan berhasil!'], 200);
        
        return response(['message' => 'Aktivasi bahan gagal!',], 400);
    }
}
