<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function welcome()
    {
        $kosts = DB::table('kosts')->join('kost_details', 'kost_details.kostID', 'kosts.id')
            ->join('alamat_details', 'alamat_details.id', '=', 'kost_details.alamatID')
            ->join('album_details', 'album_details.albumID', '=', 'kost_details.albumID')
            ->join('pictures', 'pictures.id', '=', 'album_details.pictureID')
            ->where('kosts.approved', 1)
            ->select(
                'kost_details.tipeKost as tipeKost',
                'kosts.name as nameKost',
                'alamat_details.kecamatan as kecamatanKost',
                'alamat_details.kabupaten as kabupatenKost',
                'kost_details.harga as hargaKost',
                'pictures.path as gambarKost'
            )->get();

        $facilities = DB::table('kosts')->join('kost_facilities', 'kost_facilities.kostID', '=', 'kosts.id')
            ->join('facilities', 'facilities.id', '=', 'kost_facilities.facilitiesID')
            ->where('kosts.approved', 1)
            ->select('facilities.name as facilityKost')
            ->take(5)
            ->get();

        $area = DB::table('provinsis')->join('pictures', 'pictures.id', '=', 'provinsis.pictureID')
            ->select('provinsis.name as provinsi', 'pictures.path as picture')
            ->take(4)
            ->get();

        return view('welcome', [
            'dataKost' => $kosts, 'facility' => $facilities,
            'area' => $area
        ]);
    }
}
