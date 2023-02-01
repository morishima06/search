<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request){
        $auth = Auth::user();
        return view('dashboard', [ 'auth' => $auth ]);
    }

}
