<?php

namespace App\Http\Controllers;

use App\Models\Customer; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();

        if(count($customer) > 0) {
            return response([
                'message' => 'Retrieve Customer Success',
                'data' => $customer
            ], 200);
        }

        return response([
            'message' => 'Empty Data',
            'data' => null
        ], 404);
    }

    public function cari($id) 
    {
        $customer = Customer::find($id);

        if(is_null($customer))
            return response(['message' => 'Customer tidak ditemukan!'], 404);
        
        return response([
            'message' => 'Retrieve Customer Success',
            'data' => $customer
        ], 200);
    }

    public function create(Request $request)
    {
        $storeData = $request->all();
        $validate = Validator::make($storeData, [
            'nama' => 'required|max:60',
            'email' => 'required|unique:customer|unique:customer',
            'telepon' => 'required|min:10|max:13|unique:customer'
        ]);
        
        if($validate->fails())
            return response(['message' => $validate->errors()], 400);
        
        $customer = Customer::create($storeData);

        return response(['message' => 'Registrasi Customer Berhasil'], 201);
    }

    public function update(Request $request, $id) 
    {
        $customer = customer::find($id);

        if(is_null($customer))
        {
            return response([
                'message' => 'Customer tidak ditemukan!',
                'data' => null
            ], 404);
        }

        $updateData = $request->all();
        $validate = Validator::make($updateData, [
            'nama' => 'max:60',
            'telepon' => 'min:10|max:13'
        ]);
        
        if($validate->fails())
            return response(['message' => $validate->errors()], 400);
        
        if(isset($updateData['nama']))
            $customer->nama = $updateData['nama'];

        if(isset($updateData['email']))
            $customer->email = $updateData['email'];
        
        if(isset($updateData['telepon']))
            $customer->telepon = $updateData['telepon'];

        if($customer->save()) {
            return response([
                'message' => 'Update customer berhasil!',
                'data' => $customer
            ], 200);
        }

        return response([
            'message' => 'Update customer gagal!',
            'data' => null
        ], 400);

    }

    public function hapusData($id)
    {
        $customer = Customer::find($id);

        if(is_null($customer))
            return response(['message' => 'Customer tidak ditemukan!'], 404);
        
        $customer->aktif = 0;

        if($customer->save()) 
            return response(['message' => 'Hapus customer berhasil!'], 200);
        
        return response(['message' => 'Hapus customer gagal!',], 400);
    }

    public function aktifData($id)
    {
        $customer = Customer::find($id);

        if(is_null($customer))
            return response(['message' => 'Customer tidak ditemukan!'], 404);
    
        $customer->aktif = 1;

        if($customer->save()) 
            return response(['message' => 'Aktivasi customer berhasil!'], 200);
        
        return response(['message' => 'Aktivasi customer gagal!',], 400);
    }
}
