<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sensordata;
use Illuminate\Support\Facades\DB;

class viewHandler extends Controller
{
    public function index()
    {
        return view('base');
    }
    public function main()
    {
        return view('main');
    }
    public function live()
    {
        $data = DB::table('sensordatas')
            ->orderBy('created_at', 'desc')
            ->first();
        // menentukan kondisi wcarna suhu
        if (
            $data->temperature_1 < 26 and
            $data->temperature_2 < 26 and
            $data->temperature_3 < 26 and
            $data->temperature_1 > 32 and
            $data->temperature_2 > 32 and
            $data->temperature_3 > 32
        ) {
            $colortemp = 'danger';
        } else {
            $colortemp = 'success';
        }
        // menentukan kondisi warna kelembaban
        if (
            $data->humid_1 < 40 and
            $data->humid_2 < 40 and
            $data->humid_3 < 40 and
            $data->humid_1 > 70 and
            $data->humid_2 > 70 and
            $data->humid_3 > 70
        ) {
            $colorhumid = 'danger';
        } else {
            $colorhumid = 'success';
        }
        // menentukan kondisi warna gas
        if (
            $data->gas_1 > 24 and
            $data->gas_2 > 24 and
            $data->gas_2 > 24
        ) {
            $colorgas = 'danger';
        } else {
            $colorgas = 'success';
        }
        return view('live', compact('data', 'colortemp', 'colorhumid', 'colorgas'));
    }



    public function table(Request $request)
    {
        // inisialisasi nilai posisi dan tanggal variabel tersebut kosong
        if (isset($request->posisi)) {
            $posisi = $request->posisi;
        } else {
            $posisi = 'A';
        }

        if (isset($request->tanggal)) {
            $tanggal = $request->tanggal;
        } else {
            $tanggal = date("Y-m-d h:i");
        }


        // mengambil data sesuai dengan posisi dan tanggal yang diminta
        switch ($posisi) {
            case 'A':
                $data = DB::table("sensordatas")
                    ->select("created_at", "temperature_1", "humid_1", "gas_1")
                    ->where("created_at", "<", $tanggal)
                    ->orderBy("created_at", "desc")
                    ->limit(2)
                    ->get();
                break;
            case 'B':
                $data = DB::table("sensordatas")
                    ->select("created_at", "temperature_2", "humid_2", "gas_2")
                    ->where("created_at", "<", $tanggal)
                    ->orderBy("created_at", "desc")
                    ->limit(2)
                    ->get();
                break;
            case 'C':
                $data = DB::table("sensordatas")
                    ->select("created_at", "temperature_3", "humid_3", "gas_3")
                    ->where("created_at", "<", $tanggal)
                    ->orderBy("created_at", "desc")
                    ->limit(2)
                    ->get();
                break;
        }
        return view('table', compact('data', 'posisi'));
    }

    public function about()
    {
        return view('about');
    }
}