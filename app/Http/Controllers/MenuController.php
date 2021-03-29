<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    public function index() 
    {
        $menu = Menu::all();

        if(count($menu) > 0) {
            return response([
                'message' => 'Retrieve Menu Success',
                'data' => $menu
            ], 200);
        }

        return response([
            'message' => 'Empty Data',
            'data' => null
        ], 404);
    }

    public function cari($id)
    {
        $menu = Menu::find($id);

        if(is_null($menu))
            return response(['message' => 'Menu tidak ditemukan!'], 404);
        
        return response([
            'message' => 'Retrieve Menu Success',
            'data' => $menu
        ], 200);
    }

    public function create(Request $request)
    {
        $storeData = $request->all();
        $validate = Validator::make($storeData, [
            'nama' => 'required|max:60',
            'description' => 'required',
            'harga' => 'required|numeric',
            'tipe' => array('required', 'regex:~\b(main|side|minuman)\b~i'),
            'unit' => 'required'
        ]);
        
        if($validate->fails())
            return response(['message' => $validate->errors()], 400);
        
        if($request->hasFile('gambar')) {
            $img = $request->file('gambar');

            $name = date("dmyhis");

            $filename = $name . '.' . $img->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('/Photo/Menu'), $filename);
            $path = public_path($filename);

            $storeData['gambar'] = $filename;
        }

        $menu = Menu::create($storeData);

        return response(['message' => 'Registrasi Menu Berhasil'], 201);
    }
    
    
    public function update(Request $request, $id)
    {
        $updateData = $request->all();
        $menu = Menu::findOrFail($id);

        if(isset($updateData['nama']))
            $menu->nama = $updateData['nama'];
        
        if(isset($updateData['description']))
            $menu->nama = $updateData['description'];
        
        if(isset($updateData['harga']))
            $menu->harga = $updateData['harga'];
        
        if(isset($updateData['tipe']))
            $menu->tipe = $updateData['tipe'];

        if(isset($updateData['unit']))
            $menu->unit = $updateData['unit'];

        if($menu->save()) 
        {
            return response([
                'message' => 'Update Menu berhasil!',
                'data' => $menu
            ], 200);
        }

        return response([
            'message' => 'Update Menu gagal!',
            'data' => null
        ], 400);
    }

    public function uploadGambar(Request $request)
    {
        $reqData = $request->all();

        $myData = Menu::findOrFail($reqData['id']);

        if($request->hasFile('gambar')) {
            $img = $request->file('gambar');

            $name = date("dmyhis");

            $filename = $name . '.' . $img->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('/Photo/Menu'), $filename);
            $path = public_path($filename);

            $myData->gambar = $filename;
        }
        else {
            return response(['message' => 'No gambar'], 400);
        }

        if($myData->save()) {
            return response([
                'message' => 'Update Image Success',
                'data' => $myData
            ], 200);
        }
    }

    public function hapusData($id)
    {
        $menu = Menu::find($id);

        if(is_null($menu))
            return response(['message' => 'Menu tidak ditemukan!'], 404);
        
        $menu->aktif = 0;

        if($menu->save()) 
            return response(['message' => 'Hapus menu berhasil!'], 200);
        
        return response(['message' => 'Hapus menu gagal!',], 400);
    }

    public function aktifData($id)
    {
        $menu = Menu::find($id);

        if(is_null($menu))
            return response(['message' => 'Menu tidak ditemukan!'], 404);
    

        $menu->aktif = 1;

        if($menu->save()) 
            return response(['message' => 'Aktivasi menu berhasil!'], 200);
        
        return response(['message' => 'Aktivasi menu gagal!',], 400);
    }

}
