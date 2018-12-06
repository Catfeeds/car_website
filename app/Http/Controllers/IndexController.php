<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\About;
use App\Models\BranchInfo;
use App\Models\Good;
use App\Models\Local;
use App\Models\Member;
use App\Models\UnitInfo;

class IndexController extends Controller
{
    public function home()
    {
    	$banners=Banner::where('is_show',1)->orderBy('sort')->get();
        $abouts=About::where('id',1)->first();
         $locals=Local::where('is_show',1)->orderBy('sort')->get();
         $members=Member::where('is_show',1)->orderBy('sort')->get();
        $branchs=BranchInfo::where('is_show',1)->orderBy('sort')->get();
    	return view('index.home',compact('banners','abouts','locals','members','branchs'));
    }

    public function about()
    {
        $abouts=About::where('id',1)->first();
        $detail=UnitInfo::where('id',1)->first();
    	return view('index.about',compact('abouts','detail'));
    }

    public function branch()
    {
        $branchs=BranchInfo::where('is_show',1)->orderBy('sort')->get();
    	return view('index.branch',compact('branchs'));
    }

    public function member()
    {
        $members=Member::where('is_show',1)->orderBy('sort')->get();

    	return view('index.member',compact('members'));
    }

    public function local()
    {
        $locals=Local::where('is_show',1)->orderBy('sort')->get();
    	return view('index.local',compact('locals'));
    }

    public function culture()
    {
        $culture=UnitInfo::where('id',2)->first();
    	return view('index.culture',compact('culture'));
    }

    public function product(Request $request)
    {
        $branch_id=$request->branch_id;
        $goods=BranchInfo::find($branch_id)->goods()->where('is_show',1)->orderBy('sort')->get();
        return view('index.product',compact('goods'));
    }

    public function product_info(Request $request)
    {
        $goods_id=$request->goods_id;

        $goods=Good::find($goods_id);
        return view('index.product_info',compact('goods'));
    }

    public function detail()
    {
        $detail=UnitInfo::where('id',3)->first();
        return view('index.detail',compact('detail'));
    }
}
