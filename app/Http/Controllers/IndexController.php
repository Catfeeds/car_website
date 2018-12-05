<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class IndexController extends Controller
{
    public function home()
    {
    	$banner=Banner::where('is_show',1)->orderBy('sort')->get();
    	return view('index.home',compact('banner'));
    }

    public function about()
    {
    	return view('index.about');
    }

    public function branch()
    {
    	return view('index.branch');
    }

    public function member()
    {
    	return view('index.member');
    }

    public function local()
    {
    	return view('index.local');
    }

    public function culture()
    {
    	return view('index.culture');
    }

    public function product()
    {
        return view('index.product');
    }

    public function product_info()
    {
        return view('index.product_info');
    }
}
