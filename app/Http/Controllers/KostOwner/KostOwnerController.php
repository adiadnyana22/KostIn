<?php

namespace App\Http\Controllers\KostOwner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KostOwnerController extends Controller
{
    /**
     * createManageKost
     *
     * @return void
     */
    public function createManageKost()
    {
        return view('kostOwner.manageKost');
    }

    /**
     * storeManageKost
     *
     * @return void
     */
    public function storeManageKost()
    {
    }
}
