<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SubAdminController extends Controller

{
    //
    public function dashboard()
    {
        return view('sub-admin.dashboard');
    }
}

