<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function index(){
        $auth = Auth::user();
        return view('admin.dashboard', [ 'auth' => $auth ]);
    }

}
