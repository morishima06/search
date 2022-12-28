<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function index(){

        return view('home/index');
    }

    public function category(Request $request,$category){
        $q = $request->input('q');
        $min = $request->input('min');
        $max = $request->input('max');
        $category =$category;
        $result = $request->input('result');
        $brand_name = $request->input('brand_name');
        $color = $request->input('color');
        $query = Product::query();
            if($category == 'all'){
                $query = $query;
            }else{
                $query->where('category',$category);
            }
            if($q){
                $query->where(function ($query) use ($q) {
                    $query->where("brand_name", "like", "%".$q."%")
                        ->orWhere("product_name", "like", "%".$q."%");
                    });
            }
        if($min){
            $query->where('price', '>=', $min);
        }
        if($max){
            $query->where('price', '<', $max);
        }
        if($brand_name){
            $query->where('brand_name',$brand_name);
        }
        if($color){
            $query->where('color',$color);
        }
        $branch = $query;
        $products = $branch->paginate(12);
        $group_brands = $branch->groupBy('brand_name')->select('brand_name')->get('brand_name');
        $query = Product::query();
        if($category == 'all'){
            $query = $query;
        }else{
            $query->where('category',$category);
        }
        if($q){
            $query->where(function ($query) use ($q) {
                $query->where("brand_name", "like", "%".$q."%")
                    ->orWhere("product_name", "like", "%".$q."%");
                });
        }
        if($min){
            $query->where('price', '>=', $min);
        }
        if($max){
            $query->where('price', '<', $max);
        }
        if($brand_name){
            $query->where('brand_name',$brand_name);
        }
        if($color){
            $query->where('color',$color);
        }
        $group_colors = $query->groupBy('color')->select('color')->get('color');



        return view('home/category',compact('products','q','category','min','max','result','group_brands','brand_name','group_colors','color'));


    }
    public function brands(Request $request,$brand,$category=false){
        $q = $request->input('q');
        $min = $request->input('min');
        $max = $request->input('max');
        if(isset($category)){
            $category = $category;
        }
        
        $brand = $brand;
        $result = $request->input('result');
        $color = $request->input('color');

        $query = Product::query();
        if($brand){
            $query->where('brand_name',$brand);
        }
        if($category){
            $query->where('category',$category);
        }
        if($q){
            $query->where(function ($query) use ($q) {
                $query->where("brand_name", "like", "%".$q."%")
                    ->orWhere("product_name", "like", "%".$q."%");
                });
        }
        if($min){
            $query->where('price', '>=', $min);
        }
        if($max){
            $query->where('price', '<', $max);
        }
        if($color){
            $query->where('color',$color);
        }

        $branch = $query->select('id','product_name','brand_name','price','image_path1');
        $products = $branch->paginate(12);
        $query = Product::query();
        if($brand){
            $query->where('brand_name',$brand);
        }
        if($category){
            $query->where('category',$category);

        }
        if($q){
            $query->where(function ($query) use ($q) {
                $query->where("brand_name", "like", "%".$q."%")
                    ->orWhere("product_name", "like", "%".$q."%");
                });
        }
        if($min){
            $query->where('price', '>=', $min);
        }
        if($max){
            $query->where('price', '<', $max);
        }
        if($color){
            $query->where('color',$color);
        }

        $group_colors = $query->groupBy('color')->select('color')->get('color');

        return view('home/brands',compact('products','q','brand','category','min','max','result','group_colors','color'));
    }

    public function search(Request $request){
        $q = $request->input('q');
        if($q === null){
            $q = null;

        }
        
        $category = $request->input('category');
        $min = $request->input('min');
        $max = $request->input('max');
        $brand_name = $request->input('brand_name');
        $color = $request->input('color');
        $query = Product::query();
        if($q){
            $query->where(function ($query) use ($q) {
                $query->where("brand_name", "like", "%".$q."%")
                    ->orWhere("product_name", "like", "%".$q."%");
                });
        }
        if($min){
            $query->where('price', '>=', $min);
        }
        if($max){
            $query->where('price', '<', $max);
        }

        if($category){
            $query->where('category',$category);
        }
        if($brand_name){
            $query->where('brand_name',$brand_name);
        }
        if($color){
            $query->where('color',$color);
        }
        $branch = $query->select('id','product_name','brand_name','price','image_path1');
        $products = $branch->paginate(12);
        $group_brands = $branch->groupBy('brand_name')->select('brand_name')->get('brand_name');
        $query = Product::query();
        if($q){
            $query->where(function ($query) use ($q) {
                $query->where("brand_name", "like", "%".$q."%")
                    ->orWhere("product_name", "like", "%".$q."%");
                });
        }
        if($min){
            $query->where('price', '>=', $min);
        }
        if($max){
            $query->where('price', '<', $max);
        }
        if($category){
            $query->where('category',$category);
        }
        if($brand_name){
            $query->where('brand_name',$brand_name);
        }
        if($color){
            $query->where('color',$color);
        }

        $group_colors = $query->groupBy('color')->select('color')->get('color');

        return view('home/search',compact('products','q','category','min','max','group_brands','brand_name','group_colors','color'));
        
    }
    public function product($id){

        $product =   Product::where('id', $id)->get();

        return view('home/product' ,compact('product'));


    }
    
}
