<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index(Request $request){
        $auth = Auth::user();
        $userdetails = UserDetail::where('user_id',$auth->id)->get();

        return view('profile',[
            'userdetails' => $userdetails,
            'auth' => $auth
        ]);
    }
    public function edit(Request $request){
          $rulus = [
            'user_name' => 'required',
            'email' => 'required',
            'NameSei' => 'required',
            'NameMei' => 'required',
            'NameSeiKana' => 'required',
            'NameMeiKana' => 'required',
            'birthdayY' => 'required',
            'birthdayM' => 'required',
            'birthdayD' => 'required',
            'sex' => 'required',
            'zip' => 'required | numeric',
            'pref' => 'required',
            'addr1' => 'required',
            'addr2' => 'required',
            'addr3' => 'required',
            'addr4' => 'required',
          ];
          $message = [
            'user_name.required' => 'ユーザー名を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'NameSei.required' => '名前を入力してください',
            'NameMei.required' => '名前を入力してください',
            'NameSeiKana.required' => '名前を入力してください',
            'NameMeiKana.required' => '名前を入力してください',
            'birthdayY.required' => '生年月日を入力してください',
            'birthdayM.required' => '生年月日を入力してください',
            'birthdayD.required' => '生年月日を入力してください',
            'zip.required' => '郵便番号を入力してください',
            'zip.numeric' => '整数で入力してください',
            'pref.required' => '都道府県を選んでください',
            'addr1.required' => '市区町村を入力してください',
          ];

          $validator = Validator::make($request->all(), $rulus, $message);
          if ($validator->fails()) {
            return redirect('/profile')
            ->withErrors($validator)
            ->withInput();
        }
        $user_name = $request->input('user_name');
        $email = $request->input('email');
        $NameSei = $request->input('NameSei');
        $NameMei = $request->input('NameMei');
        $NameSeiKana = $request->input('NameSeiKana');
        $NameMeiKana = $request->input('NameMeiKana');
        $birthdayY = $request->input('birthdayY');
        $birthdayM = $request->input('birthdayM');
        $birthdayD = $request->input('birthdayD');
        $sex = $request->input('sex');
        $zip = $request->input('zip');
        $pref = $request->input('pref');
        $addr1 = $request->input('addr1');
        $addr2 = $request->input('addr2');
        $addr3 = $request->input('addr3');
        $addr4 = $request->input('addr4');

        $auth_user = Auth::user();
        $userdetail = UserDetail::find($auth_user->id);

        $auth_user->user_name = $user_name;
        $auth_user->email = $email;
        $auth_user->save();

        $userdetail->NameSei = $NameSei;
        $userdetail->NameMei = $NameMei;
        $userdetail->NameSeiKana = $NameSeiKana;
        $userdetail->NameMeiKana = $NameMeiKana;
        $userdetail->birthdayY = $birthdayY;
        $userdetail->birthdayM = $birthdayM;
        $userdetail->birthdayD = $birthdayD;
        $userdetail->sex = $sex;
        $userdetail->zip = $zip;
        $userdetail->pref = $pref;
        $userdetail->addr1 = $addr1;
        $userdetail->addr2 = $addr2;
        $userdetail->addr3 = $addr3;
        $userdetail->addr4 = $addr4;
        $userdetail->save();
        return redirect('profile');
    }
}
