<?php

namespace App\Http\Controllers\KostOwner;

use App\Http\Controllers\Controller;
use App\Http\Requests\KostOwner\KostRequest;
use App\Models\AlamatDetail;
use App\Models\Album;
use App\Models\AlbumDetails;
use App\Models\Kost;
use App\Models\KostDetail;
use App\Models\KostFacilities;
use App\Models\KostRequest as ModelsKostRequest;
use App\Models\Picture;
use App\Models\Provinsi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KostOwnerController extends Controller
{

    public function createManageKost()
    {
        $dataKost = DB::table('kosts')
            ->join('kost_details', 'kosts.id', '=', 'kost_details.kostID')
            ->where('kosts.ownerID', '=', Auth::user()->id)
            ->select('kosts.name as kostName', 'kosts.approved as kostApproved', 'kost_details.jumlahKamar as kostJumlahKamar', 'kost_details.jumlahPenghuni as kostJumlahPenghuni', 'kosts.id as kostID')
            ->get();
        return view('kostOwner.dashboard', ['kost' => $dataKost]);
    }

    public function createTambahKost()
    {
        $provinsi = Provinsi::get();
        return view('kostOwner.tambahKost', ['provinsi' => $provinsi]);
    }

    public function storeTambahKost(KostRequest $request)
    {
        $data = $request->all();

        $user = Auth::user();

        $kost = Kost::create([
            'name' => $data['kostName'],
            'description' => $data['kostDescription'],
            'ownerID' => $user->id,
            'approved' => 0,
        ]);
        $kost->save();

        $alamat = AlamatDetail::create([
            'kecamatan' => $data['kostKecamatan'],
            'kabupaten' => $data['kostKabupaten'],
            'provinsiID' => $data['kostProvinsi'],
            'alamatDetail' => $data['kostDetailAlamat'],
            'kodePos' => $data['kostKodePos'],
        ]);
        $alamat->save();

        $imageName = $request->kostName . '/' . $request->kostPhoto->getClientOriginalName();
        $request->kostPhoto->move(public_path('Album/Kost/' . $request->kostName . '/'), $request->kostPhoto->getClientOriginalName());

        $picture = Picture::create([
            'path' => $imageName,
            'type' => 'Kost',
        ]);
        $picture->save();

        $album = Album::create([
            'kostID' => $kost->id,
            'coverID' => $picture->id,
        ]);
        $album->save();

        $albumDetail = AlbumDetails::create([
            'albumID' => $album->id,
            'pictureID' => $picture->id,
        ]);
        $albumDetail->save();

        $kostDetail = KostDetail::create([
            'kostID' => $kost->id,
            'tipeKost' => $data['kostTipe'],
            'jumlahKamar' => $data['kostJumlahKamar'],
            'jumlahPenghuni' => $data['kostJumlahPenghuni'],
            'harga' => $data['kostPrice'],
            'alamatID' => $alamat->id,
            'favourites' => 0,
            'albumID' => $album->id,
        ]);
        $kostDetail->save();

        $facilities = $request->kostFacilities;

        foreach ($facilities as $facility) {
            KostFacilities::create([
                'kostID' => $kost->id,
                'facilitiesID' => $facility,
            ]);
        }

        return redirect('kostOwner/dashboard');
    }

    public function createEditKost($id)
    {
        $kost = Kost::where('id', $id)->first();
        $kostDetail = KostDetail::where('kostID', $kost->id)->first();
        $provinsi = Provinsi::get();
        return view('kostOwner.editKost', ['provinsi' => $provinsi, 'kost' => $kost, 'kostDetail' => $kostDetail]);
    }

    public function storeEditKost(KostRequest $request)
    {
        $data = $request->all();

        $user = Auth::user();

        $kost = Kost::where('id', $data['kostID'])->update([
            'name' => $data['kostName'],
            'description' => $data['kostDescription'],
        ]);
        $kost = Kost::where('id', $data['kostID'])->first();

        $kostDetail = KostDetail::where('kostID', $data['kostID'])->update([
            'tipeKost' => $data['kostTipe'],
            'jumlahKamar' => $data['kostJumlahKamar'],
            'jumlahPenghuni' => $data['kostJumlahPenghuni'],
            'harga' => $data['kostPrice'],
        ]);
        $kostDetail = KostDetail::where('kostID', $data['kostID'])->first();

        $alamat = AlamatDetail::where('id', $kostDetail->alamatID)->update([
            'kecamatan' => $data['kostKecamatan'],
            'kabupaten' => $data['kostKabupaten'],
            'provinsiID' => $data['kostProvinsi'],
            'alamatDetail' => $data['kostDetailAlamat'],
            'kodePos' => $data['kostKodePos'],
        ]);

        $imageName = $request->kostName . '/' . $request->kostPhoto->getClientOriginalName();
        $request->kostPhoto->move(public_path('Album/Kost/'), $imageName);

        $picture = Picture::create([
            'path' => $imageName,
            'type' => 'Kost/' . $kost->name,
        ]);

        $album = Album::where('id', $kostDetail->albumID)->update([
            'kostID' => $kost->id,
            'coverID' => $picture->id,
        ]);

        $album = Album::where('id', $kostDetail->albumID)->first();

        $albumDetail = AlbumDetails::where('id', $album->id)->update([
            'albumID' => $album->id,
            'pictureID' => $picture->id,
        ]);

        $facilities = $request->kostFacilities;
        $kostFacility = KostFacilities::where('kostID', $data['kostID'])->first();
        $kostFacilityCount = KostFacilities::where('kostID', $data['kostID'])->count();
        $i = 0;

        for ($i; $i < $kostFacilityCount; $i++) {
            KostFacilities::where('id', $kostFacility->id + $i)->update([
                'facilitiesID' => $facilities[$i],
            ]);
        }

        for ($i; $i < sizeof($facilities); $i++) {
            KostFacilities::create([
                'kostID' => $data['kostID'],
                'facilitiesID' => $facilities[$i],
            ]);
        }

        return redirect('kostOwner/dashboard');
    }

    public function createManageKostRequest()
    {
        $userrequests = ModelsKostRequest::join('users', 'users.id', '=', 'kost_requests.userID')
            ->join('kosts', 'kosts.id', '=', 'kost_requests.kostID')
            ->where('kost_requests.ownerID', Auth::user()->id)
            ->get(['users.*', 'kost_requests.*', 'kosts.*']);

        return view('kostOwner.manageUserRequest', ['data' => $userrequests]);
    }
}
