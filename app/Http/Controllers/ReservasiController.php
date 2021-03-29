<?php

namespace App\Http\Controllers;

use App\Models\Reservasi; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use SimpleSoftwareIO\QrCode\Facades\QrCode; 

class ReservasiController extends Controller
{

    private function getWaktuSesi($curr) 
    {
        $clock = explode(" ", $curr)[1];

        $hour = (int) $clock[0] . $clock[1];
      
        if($hour >=17 && $hour <= 21)
            return  "dinner";
        
        return "lunch";
    }
    
    public function index()
    {
        $sesi = $this->getWaktuSesi(Carbon::now());
        
        $reservasi = Reservasi::where('waktu_sesi', $sesi)->whereDate('waktu_mulai', '=', Carbon::today()->toDateString())->get();

        if(count($reservasi) > 0) {
            return response([
                'message' => 'Retrieve Reservasi Success',
                'data' => $reservasi
            ], 200);
        }

        return response([
            'message' => 'Empty Data',
            'data' => null
        ], 404);
    }
    
    public function indexAll()
    {
        $reservasi = Reservasi::all();

        if(count($reservasi) > 0) 
        {
            return response([
                'message' => 'Retrieve Seluruh Reservasi Success',
                'data' => $reservasi
            ]);
        }
    }

    public function cariBerdasarkanCustomer($telp)
    {
        $reservasi = Reservasi::whereHas('getCustomerRelation', function($query) use ($telp) {
            return $query->where('telepon', $telp);
        })->get();
        
        if(count($reservasi) > 0) {
            return response([
                'message' => 'Retrieve Reservasi Success',
                'data' => $reservasi
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
        
        $reservasi = Reservasi::create($storeData);

        return response(['message' => 'Buat Reservasi Berhasil'], 201);
    }

    public function update(Request $request, $id)
    {
        $updateData = $request->all();

        $data = Reservasi::findOrFail($id);
        
        if(isset($updateData['waktu_mulai'])) 
        {
            $data->waktu_mulai = $updateData['waktu_mulai'];
            $data->waktu_sesi = $this->getWaktuSesi($updateData['waktu_mulai']);
        }
        
        if(isset($updateData['status']))
        {
            $data->status = $updateData['status'];
        }
    
        if($data->save())
        {
            return response([
                'message' => 'Update Reservasi berhasil!',
                'data' => $data
            ], 200);
        }

        return response([
            'message' => 'Update Reservasi gagal!',
            'data' => null
        ], 400);
    }

    public function hapusData($id)
    {
        $reservasi = Reservasi::find($id);

        if(is_null($reservasi))
            return response(['message' => 'Reservasi tidak ditemukan!'], 404);
        
        $reservasi->status = 0;

        if($reservasi->save()) 
            return response(['message' => 'Hapus reservasi berhasil!'], 200);
        
        return response(['message' => 'Hapus reservasi gagal!'], 400);
    }

    public function aktifData($id)
    {
        $reservasi = Reservasi::find($id);

        if(is_null($reservasi))
            return response(['message' => 'Reservasi tidak ditemukan!'], 404);
    

        $reservasi->aktif = 1;

        if($reservasi->save()) 
            return response(['message' => 'Aktivasi reservasi berhasil!'], 200);
        
        return response(['message' => 'Aktivasi reservasi gagal!',], 400);
    }

    public function cetakQR(Request $request)
    {

        $reqData = $request->all();

        $reservasi = DB::table('reservasi')
                        ->select('reservasi.id','reservasi.nomor_meja', 'customer.nama')
                        ->join('customer', 'customer.id', '=', 'reservasi.id_customer')
                        ->where('reservasi.id', '=', $reqData['id_reservasi'])
                        ->get();
        
        if(!$reservasi->isEmpty()){
            $data = json_decode(json_encode($reservasi), true);

            $str = json_encode($data[0]);
            return view('qrCode')->with('str', $str)->with('name', $reqData['karyawan']);
            
            // $qr = QrCode::size(250)->generate($str);

            // return response()->json($qr);
        }
           
        // return response(['message' => 'Reservasi ditemukan', 'data' => $reservasi], 404);
        return response(['message' => 'Reservasi tidak ditemukan'], 404);
    }

}
