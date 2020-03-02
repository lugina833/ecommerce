<?php

namespace App\Http\Controllers;
use Kavist\RajaOngkir\Facades\RajaOngkir;
use Illuminate\Http\Request;

class RajaongkirController extends Controller
{
    public function getProvince()
    {
    	$daftarProvinsi = RajaOngkir::provinsi()->all();
    	return view('rajaongkir', compact('daftarProvinsi'));
    }
}
