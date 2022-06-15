<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\KostRequest;
use App\Models\Kost;
use App\Models\Request as KostOwnerRequest;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests = KostOwnerRequest::join('users', 'users.id', '=', 'requests.userID')
            ->get(['users.*', 'requests.*']);
        return view('admin.dashboard', ['data' => $requests]);
    }

    public function acceptKostOwner($id)
    {
        KostOwnerRequest::where('userID', $id)->update([
            'acceptedBy' => FacadesAuth::user()->id,
        ]);

        return redirect('admin/dashboard');
    }

    public function manageKostRequest()
    {
        $kosts = Kost::join('users', 'users.id', '=', 'kosts.ownerID')
            ->get(['users.*', 'kosts.*']);
        return view('admin.manageKostRequest', ['data' => $kosts]);
    }

    public function acceptKostRequest(Request $request)
    {
        Kost::where('id', $request->kostID)->update([
            'approved' => 1,
        ]);

        return redirect('admin/manageKostRequest');
    }

    public function manageUserRequest()
    {
        $userrequests = KostRequest::join('users', 'users.id', '=', 'kost_requests.userID')
            ->get(['users.*', 'kost_requests.*']);
        return view('admin.manageUserRequest', ['data' => $userrequests]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }
}
