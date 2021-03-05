<?php

namespace App\Http\Controllers\Laporan;

use PDF;
use App\Profil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index(Request $request){
        if ($request->has('tgl_awal')){
            $profile = Profil::whereBetween('created_at',
            [request('tgl_awal'),request('tgl_akhir')])->get();
        }

        $pdf = PDF::loadView('laporan.profil.index',compact('profile'))->setPaper('a4','landscape');

        return $pdf->stream('laporan_barang.pdf');
    }
}
