<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PegawaiController extends Controller
{  
    public function masuk(Request $request) 
    {
        $loginData = $request->all();
        $pegawai = Pegawai::where('email', $loginData['email'])->first();

        if(!is_null($pegawai) && password_verify($loginData['password'], $pegawai->password))
        {
            return response([
                'message' => 'Login Pegawai Success',
                'data' => $pegawai
            ], 200);
        }
        
        return response(['message' => 'Email atau Password Salah'], 400);
    }

    public function index()
    {
        $pegawai = Pegawai::all();

        if(count($pegawai) > 0) {
            return response([
                'message' => 'Retrieve Pegawai Success',
                'data' => $pegawai
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
            'password' => 'required|min:6',
            'email' => 'required|unique:pegawai',
            'jenis_kelamin' => 'required',
            'role' => array('required', 'regex:~\b(owner|manager|waiter|cashier|chef)\b~i')
        ]);
        
        if($validate->fails())
            return response(['message' => $validate->errors()], 400);
        
        $pegawai = Pegawai::create($storeData);

        return response(['message' => 'Registrasi Pegawai Berhasil'], 201);
    }

    public function update(Request $request, $id) 
    {
        $pegawai = Pegawai::find($id);

        if(is_null($pegawai))
        {
            return response([
                'message' => 'Pegawai tidak ditemukan!',
                'data' => null
            ], 404);
        }

        $updateData = $request->all();
        $validate = Validator::make($updateData, [
            'nama' => 'max:60',
            'password' => 'min:6',
            'role' => array('regex:~\b(owner|manager|waiter|cashier|chef)\b~i')
        ]);
        
        if($validate->fails())
            return response(['message' => $validate->errors()], 400);
        
        if(isset($updateData['nama']))
            $pegawai->nama = $updateData['nama'];

        if(isset($updateData['password']))
            $pegawai->password = bcrypt($updateData['password']);

        if(isset($updateData['email']))
            $pegawai->email = $updateData['email'];
        
        if(isset($updateData['jenis_kelamin']))
            $pegawai->jenis_kelamin = $updateData['jenis_kelamin'];

        if(isset($updateData['role']))
            $pegawai->role = $updateData['role'];
        
        if($pegawai->save()) 
        {
            return response([
                'message' => 'Update pegawai berhasil!',
                'data' => $pegawai
            ], 200);
        }

        return response([
            'message' => 'Update pegawai gagal!',
            'data' => null
        ], 400);

    }

    public function cari($id) {
        $pegawai = Pegawai::find($id);

        if(is_null($pegawai))
            return response(['message' => 'Pegawai tidak ditemukan!'], 404);
        
        return response([
            'message' => 'Retrieve Pegawai Success',
            'data' => $pegawai
        ], 200);
    }

    public function hapusData($id)
    {
        $pegawai = Pegawai::find($id);

        if(is_null($pegawai))
            return response(['message' => 'Pegawai tidak ditemukan!'], 404);
        
        $pegawai->aktif = 0;

        if($pegawai->save()) 
            return response(['message' => 'Hapus pegawai berhasil!'], 200);
        
        return response(['message' => 'Hapus pegawai gagal!',], 400);
    }

    public function aktifData($id)
    {
        $pegawai = Pegawai::find($id);

        if(is_null($pegawai))
            return response(['message' => 'Pegawai tidak ditemukan!'], 404);
    

        $pegawai->aktif = 1;

        if($pegawai->save()) 
            return response(['message' => 'Aktivasi pegawai berhasil!'], 200);
        
        return response(['message' => 'Aktivasi pegawai gagal!',], 400);
    }
}
