<?php

namespace App\Http\Controllers;
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
    public function store(Request $request){
        // sampleディレクトリに画像を保存
        // $request->file('uploadFile')->store('public/img');
        return redirect('/');
    }
    public function upload_check(Request $request){
        $rulus = [
            'uploadfile1' => 'required',
            'product_name' => 'required',
            'category' => 'required',
            'category_item' => 'required',
            'brand_name' => 'required',
            'color' => 'required',
            'price' => 'required',
          ];
        $message = [
            'uploadfile1.required' => '画像1枚目はアップロードしてください',
            'product_name.required' => '商品名を入力してください',
            'category.required' => 'カテゴリーを選択してください',
            'category_item.required' => 'カテゴリーを選択してください',
            'brand_name.required' => 'ブランド名を入力してください',
            'color.required' => '色を選択してください',
            'price.required' => '価格を入力してください',
          ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) {
            return redirect('/upload')
            ->withErrors($validator)
            ->withInput();
        }
        $category = $request->input('category');
        $category_item = $request->input('category_item');
        $brand_name = $request->input('brand_name');
        $product_name = $request->input('product_name');
        $price = $request->input('price');
        $color = $request->input('color');
        $product = new Product;
        $auth = Auth::id();
        $upload = $request->file('uploadfile1');
        //imageの名前を取得
        if($request->file('uploadfile1')){
        $file_name1 = $request->file('uploadfile1')->getClientOriginalName();
        $request->file('uploadfile1')->storeAs('public/image',$file_name1);
        $file_name1 = 'storage/image/' .  $file_name1;
        }else{
            $file_name1 = null;
        }
        if($request->file('uploadfile2')){
        $file_name2 = $request->file('uploadfile2')->getClientOriginalName();
        $request->file('uploadfile2')->storeAs('public/image',$file_name2);
        $file_name2 = 'storage/image/' .  $file_name2;
        }else{
        $file_name2 = null;
        }
        if($request->file('uploadfile3')){
            $file_name3 = $request->file('uploadfile3')->getClientOriginalName();
            $request->file('uploadfile3')->storeAs('public/image',$file_name3);
            $file_name3 = 'storage/image/' .  $file_name3;
        }else{
            $file_name3 = null;
        }
        if($request->file('uploadfile4')){
        $file_name4 = $request->file('uploadfile4')->getClientOriginalName();
        $request->file('uploadfile4')->storeAs('public/image',$file_name4);
        $file_name4 = 'storage/image/' .  $file_name4;
        }else{
        $file_name4 = null;
        }
        //image情報をファイルに保存
        $product->create([
            'category' => $category,
            'category_item'=>$category_item,
            'brand_name' => $brand_name,
            'product_name' => $product_name,
            'color' => $color,
            'price' => $price,
            'user_id' => $auth,
            //image_pathをDBに保存
            'image_path1'=> $file_name1,
            'image_path2'=> $file_name2,
            'image_path3'=> $file_name3,
            'image_path4'=> $file_name4
        ]);

        return redirect('/upload');
        }

    public function show(){

        $auth = Auth::id();
        $products = Product::where('user_id', $auth)->paginate(6);
        return view('show',['products' => $products]);
    }

    public function show_edit($id){
        $products =   Product::where('id', $id)->get();
        return view('show_edit' ,compact('products','id'));
    }
    public function show_edit_check(Request $request){
          $request->validate([
            'product_name' => 'required',
            'color' => 'required',
            'price' => 'required',
        ],
         [
            'product_name.required' => '商品名を入力してください',
            'color.required' => 'カラーを選択してください',
            'price.required' => '価格を入力してください',
         ]);

         $id = $request->input('id');
         $product_name = $request->input('product_name');
         $color = $request->input('color');
         $price = $request->input('price');
         $product = product::find($id);
         if($request->file('uploadfile1')){
            $file_name1 = $request->file('uploadfile1')->getClientOriginalName();
            $request->file('uploadfile1')->storeAs('public/image',$file_name1);
            $file_name1 = 'storage/image/' .  $file_name1;
            }else{
                $file_name1 = null;
            }
            if($request->file('uploadfile2')){
            $file_name2 = $request->file('uploadfile2')->getClientOriginalName();
            $request->file('uploadfile2')->storeAs('public/image',$file_name2);
            $file_name2 = 'storage/image/' .  $file_name2;
        }else{
            $file_name2 = null;
    
        }
        if($request->file('uploadfile3')){
            $file_name3 = $request->file('uploadfile3')->getClientOriginalName();
            $request->file('uploadfile3')->storeAs('public/image',$file_name3);
            $file_name3 = 'storage/image/' .  $file_name3;
        }else{
            $file_name3 = null;
        }
        if($request->file('uploadfile4')){
            $file_name4 = $request->file('uploadfile4')->getClientOriginalName();
            $request->file('uploadfile4')->storeAs('public/image',$file_name4);
            $file_name4 = 'storage/image/' .  $file_name4;
        }else{
            $file_name4 = null;
        }
        $product->product_name = $product_name;
        $product->color = $color;
        $product->price = $price;
        $product->image_path1 =  $file_name1;
        $product->image_path2 =  $file_name2;
        $product->image_path3 =  $file_name3;
        $product->image_path4 =  $file_name4;
        $product->save();

        return redirect('show');
    }
    public function show_delete_confirm($id){
        $products =   Product::where('id', $id)->get();
        return view('show_delete_confirm' ,['products' => $products]);
    }
    public function show_delete($id){
        $products = Product::find($id);
        $products->delete();
        return  redirect(route('show'));
    }
    public function edit(Request $request){
        $auth = Auth::user();
        $userdetails = UserDetail::where('user_id',$auth->id)->get();

        return view('edit',[
            'userdetails' => $userdetails,
            'auth' => $auth
        ]);
    }
    public function edit_check(Request $request){
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
            return redirect('/edit')
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
        return redirect('edit');
    }
}
