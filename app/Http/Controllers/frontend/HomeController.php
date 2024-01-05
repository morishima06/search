<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function index()
    {
        return view('home/index');
    }

    public function category(Request $request, $category)
    {
        $min = $request->input('min');
        $max = $request->input('max');
        $category = $category;
        $result = $request->input('result');
        $brand_name = $request->input('brand_name');
        $color = $request->input('color');
        $query = Product::query();
        // 製品表示部分
        if ($category == 'all') {
            $query = $query;
        } else {
            $query->where('category', $category);
        }
        if ($min) {
            $query->where('price', '>=', $min);
        }
        if ($max) {
            $query->where('price', '<', $max);
        }
        if ($brand_name) {
            $query->whereIn('brand_name', $brand_name);
        }
        if ($color) {
            $query->whereIn('color', $color);
        }
        $products = $query->paginate(12);
        // 色の表示部分
        $query = Product::query();
        if ($category == 'all') {
            $query = $query;
        } else {
            $query->where('category', $category);
        }
        $group_colors = $query->groupBy('color')->get('color');
        // ブランド部分
        $query = Product::query();
        if ($category == 'all') {
            $query = $query;
        } else {
            $query->where('category', $category);
        }
        $group_brands = $query->groupBy('brand_name')->get('brand_name');

        return view('home/category', compact('products', 'category', 'min', 'max', 'result', 'group_brands', 'brand_name', 'group_colors', 'color'));
    }
    public function brands(Request $request, $brand, $category = false)
    {
        $q = $request->input('q');
        $min = $request->input('min');
        $max = $request->input('max');
        if (isset($category)) {
            $category = $category;
        }
        $brand = $brand;
        $result = $request->input('result');
        $color = $request->input('color');
        $query = Product::query();
        if ($brand) {
            $query->where('brand_name', $brand);
        }
        if ($category) {
            $query->where('category', $category);
        }
        if ($q) {
            $query->where(function ($query) use ($q) {
                $query->where("brand_name", "like", "%" . $q . "%")
                    ->orWhere("product_name", "like", "%" . $q . "%");
            });
        }
        if ($min) {
            $query->where('price', '>=', $min);
        }
        if ($max) {
            $query->where('price', '<', $max);
        }
        if ($color) {
            $query->whereIn('color', $color);
        }
        $products = $query->paginate(12);
        $query = Product::query();
        if ($brand) {
            $query->where('brand_name', $brand);
        }
        $group_colors = $query->groupBy('color')->select('color')->get('color');

        return view('home/brands', compact('products', 'q', 'brand', 'category', 'min', 'max', 'result', 'group_colors', 'color'));
    }

    public function search(Request $request)
    {
        $q = $request->input('q');
        if ($q === null) {
            $q = null;
        }
        $category = $request->input('category');
        $min = $request->input('min');
        $max = $request->input('max');
        $brand_name = $request->input('brand_name');
        $color = $request->input('color');
        $query = Product::query();
        if ($q) {
            $query->where(function ($query) use ($q) {
                $query->where("brand_name", "like", "%" . $q . "%")
                    ->orWhere("product_name", "like", "%" . $q . "%");
            });
        }
        if ($min) {
            $query->where('price', '>=', $min);
        }
        if ($max) {
            $query->where('price', '<', $max);
        }
        if ($category) {
            $query->where('category', $category);
        }
        if ($brand_name) {
            $query->whereIn('brand_name', $brand_name);
        }
        if ($color) {
            $query->whereIn('color', $color);
        }
        $products = $query->paginate(12);
        $query = Product::query();
        if ($q) {
            $query->where(function ($query) use ($q) {
                $query->where("brand_name", "like", "%" . $q . "%")
                    ->orWhere("product_name", "like", "%" . $q . "%");
            });
        }
        $group_brands = $query->groupBy('brand_name')->select('brand_name')->get('brand_name');
        $query = Product::query();
        if ($q) {
            $query->where(function ($query) use ($q) {
                $query->where("brand_name", "like", "%" . $q . "%")
                    ->orWhere("product_name", "like", "%" . $q . "%");
            });
        }
        $group_colors = $query->groupBy('color')->select('color')->get('color');

        return view('home/search', compact('products', 'q', 'category', 'min', 'max', 'group_brands', 'brand_name', 'group_colors', 'color'));
    }
    public function product($id)
    {
        $product =  Product::where('id', $id)->first();

        return view('home/product', compact('product'));
    }
}
