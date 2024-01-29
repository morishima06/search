<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


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
            'qty' => 'required | min:0'
          ];
        $message = [
            'uploadfile1.required' => '画像1枚目はアップロードしてください',
            'product_name.required' => '商品名を入力してください',
            'category.required' => 'カテゴリーを選択してください',
            'category_item.required' => 'カテゴリーを選択してください',
            'brand_name.required' => 'ブランド名を入力してください',
            'color.required' => '色を選択してください',
            'price.required' => '価格を入力してください',
            'qty.required' => '数量を入力してください',
            'qty.max' => '0以上の数量を入力してください',
          ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) {
            return back()
            ->withErrors($validator)
            ->withInput();
        }
        $category = $request->input('category');
        $category_item = $request->input('category_item');
        $brand_name = $request->input('brand_name');
        $product_name = $request->input('product_name');
        $price = $request->input('price');
        $color = $request->input('color');
        $qty = $request->input('qty');
        $product = new Product;
        $auth = Auth::id();
        if($request->file('uploadfile1')){
        $image = $request->file('uploadfile1');
        // 画像の名前を取得
        $image_name = $request->file('uploadfile1')->getClientOriginalName();
        // バケットのフォルダへアップロードする
        $path = Storage::disk('s3')->putFileAs('product', $image, $image_name, 'public');
        // アップロードした画像のフルパスを取得
        $file_name1 = Storage::disk('s3')->url($path);

        }else{
            $file_name1 = null;
        }
        if($request->file('uploadfile2')){
            $image_name = $request->file('uploadfile2')->getClientOriginalName();
            $path = Storage::disk('s3')->putFileAs('product', $image, $image_name, 'public');
            $file_name2 = Storage::disk('s3')->url($path);
            }else{
        $file_name2 = null;
        }
        if($request->file('uploadfile3')){
            $image_name = $request->file('uploadfile3')->getClientOriginalName();
            $path = Storage::disk('s3')->putFileAs('product', $image, $image_name, 'public');
            $file_name3 = Storage::disk('s3')->url($path);
        }else{
            $file_name3 = null;
        }
        if($request->file('uploadfile4')){
            $image_name = $request->file('uploadfile4')->getClientOriginalName();
            $path = Storage::disk('s3')->putFileAs('product', $image, $image_name, 'public');
            $file_name4 = Storage::disk('s3')->url($path);
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
            'qty' => $qty,
            //image_pathをDBに保存
            'image_path1'=> $file_name1,
            'image_path2'=> $file_name2,
            'image_path3'=> $file_name3,
            'image_path4'=> $file_name4
        ]);
        session()->flash('flash_message', '出品が完了しました');
        return redirect()->route('admin_product_show');
        }

    public function edit($id){
        $products =   Product::where('id', $id)->get();
        return view('admin.edit_product' ,compact('products','id'));
    }
    public function edit_check(Request $request){
        $rulus = [
            'uploadfile1' => 'required',
            'product_name' => 'required',
            'price' => 'required',
            'qty' => 'required | min:0'
          ];
        $message = [
            'uploadfile1.required' => '画像1枚目はアップロードしてください',
            'product_name.required' => '商品名を入力してください',
            'category_item.required' => 'カテゴリーを選択してください',
            'price.required' => '価格を入力してください',
            'qty.required' => '数量を入力してください',
            'qty.max' => '0以上の数量を入力してください',
          ];
        $validator = Validator::make($request->all(), $rulus, $message);
        if($validator->fails()) {
            return back()
            ->withErrors($validator)
            ->withInput();
        }

         $id = $request->input('id');
         $product_name = $request->input('product_name');
         $color = $request->input('color');
         $price = $request->input('price');
         $product = product::find($id);

         if($request->file('uploadfile1')){
            $image = $request->file('uploadfile1');
            // 画像の名前を取得
            $image_name = $request->file('uploadfile1')->getClientOriginalName();
            // バケットのフォルダへアップロードする
            $path = Storage::disk('s3')->putFileAs('product', $image, $image_name, 'public');
            // アップロードした画像のフルパスを取得
            $file_name1 = Storage::disk('s3')->url($path);
    
            }else{
                $file_name1 = null;
            }
            if($request->file('uploadfile2')){
                $image = $request->file('uploadfile2');
                $image_name = $request->file('uploadfile1')->getClientOriginalName();
                $path = Storage::disk('s3')->putFileAs('product', $image, $image_name, 'public');
                $file_name2 = Storage::disk('s3')->url($path);
                }else{
            $file_name2 = null;
    
        }
        if($request->file('uploadfile3')){
            $image = $request->file('uploadfile3');
            $image_name = $request->file('uploadfile1')->getClientOriginalName();
            $path = Storage::disk('s3')->putFileAs('product', $image, $image_name, 'public');
            $file_name3 = Storage::disk('s3')->url($path);
    }else{
            $file_name3 = null;
        }
        if($request->file('uploadfile4')){
            $image = $request->file('uploadfile4');
            $image_name = $request->file('uploadfile1')->getClientOriginalName();
            $path = Storage::disk('s3')->putFileAs('product', $image, $image_name, 'public');
            $file_name4 = Storage::disk('s3')->url($path);
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
        session()->flash('flash_message', '編集が完了しました');

        return redirect(route('admin_product_show'));
    }
    public function delete_confirm($id){
        $products =   Product::where('id', $id)->get();
        return view('admin.delete_product_confirm' ,['products' => $products]);
    }
    public function delete_check($id){
        $products = Product::find($id);
        $products->delete();
        session()->flash('flash_message', '商品の削除を完了しました');
        return  redirect(route('admin_product_show'));
    }


}
