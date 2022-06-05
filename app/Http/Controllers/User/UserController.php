<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateAccountRequest;
use App\Models\AlamatDetail;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    /**
     * Function to update Account from manageAccount view
     *
     * @return void
     */
    public function createUpdateAccount()
    {
        return view('user.manageAccount');
    }

    public function storeUpdateAccount(UpdateAccountRequest $request)
    {
        $data = $request->all();

        $user = Auth::user();
        $user->name = $data['name'];
        if ($data['password'] != null) {
            $user->password = Hash::make($data['password']);
        } else {
            $user->password = $user->password;
        }
        $user->phone = $data['phone'];

        if (Auth::user()->alamatID != null) {
            $alamat = AlamatDetail::where('id', $user->alamatID)->first();
            $alamat->kecamatan = $data['kecamatan'];
            $alamat->kabupaten = $data['kabupaten'];
            $alamat->provinsiID = 1;
            $alamat->alamatDetail = $data['detailAlamat'];
            $alamat->kodePos = $data['kodePos'];
            $user->save();
            $alamat->save();
        } else {
            $count = AlamatDetail::orderBy('id', 'desc')->first();
            $user->alamatID = $count->id + 1;
            $this->newAlamatDetail($data);
            $user->save();
        }


        if (Auth::user()->roleID == 3) {
            return redirect()->intended(RouteServiceProvider::KOSTOWNERHOME);
        } else {
            return redirect()->intended(RouteServiceProvider::HOME);
        }
    }

    private function newAlamatDetail($data)
    {

        $alamat = AlamatDetail::create([
            'kecamatan' => $data['kecamatan'],
            'kabupaten' => $data['kabupaten'],
            'provinsiID' => 1,
            'alamatDetail' => $data['detailAlamat'],
            'kodePos' => $data['kodePos'],
        ]);
    }
}
