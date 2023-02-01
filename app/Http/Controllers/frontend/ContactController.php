<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSendMail;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{
    public function index()
    {
        return view('home/contact');
    }

    public function confirm(Request $request)
    {
      $inputs = $request->all();
        if(!$inputs){
            return redirect()->route('contact');
        }
        $rulus = [
            'name' => 'required',
            'email' => ['required','email','confirmed'],
            'content' => 'max:4000'
          ];
          $message = [
            'name.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'email.confirmed' => '確認欄のメールアドレスと一致しません',
            'content' => '色を選択してください',
          ];
          $validator = Validator::make($request->all(), $rulus, $message);

          if ($validator->fails()) {
            return redirect()->route('contact')
            ->withErrors($validator)
            ->withInput();
        }
        return view('home/contact_confirm',[
            'inputs' => $inputs,
        ]);

    }
    public function send(Request $request)
    {
        $inputs = $request->all();
        if(!$inputs){
            return redirect()->route('index');
        }
          \Mail::to($inputs['email'])->send(new ContactSendMail($inputs));
        $request->session()->regenerateToken(); //2回メール送信を防ぐため
        return view('home/thanks');
    }
}
