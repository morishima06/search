<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Validator;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $auth = Auth::id();
        $products = Product::where('user_id', $auth)->paginate(6);
        return view('admin.product',['products' => $products]);
    }

    public function add_check(Request $request){
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
            return redirect('/admin.upload')
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
        session()->flash('flash_message', '投稿が完了しました');
        return redirect('/admin.product');
        }

    public function edit($id){
        $products =   Product::where('id', $id)->get();
        return view('admin.edit_product' ,compact('products','id'));
    }
    public function edit_check(Request $request){
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

        return redirect(route('product'));
    }
    public function delete_confirm($id){
        $products =   Product::where('id', $id)->get();
        return view('admin.delete_product_confirm' ,['products' => $products]);
    }
    public function delete_check($id){
        $products = Product::find($id);
        $products->delete();
        return  redirect(route('product'));
    }

}
