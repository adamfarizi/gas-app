<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    function admin(){
        $data['title'] = 'Admin';
        return view('role.admin.dashboard', $data);
    }
    function agen(){
        $data['title'] = 'Agen';
        return view('role.agen.dashboard', $data);
    }
    function kurir(){
        $data['title'] = 'Kurir';
        return view('role.kurir.dashboard', $data);
    }
}