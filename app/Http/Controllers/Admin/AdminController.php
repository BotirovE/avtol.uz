<?php

namespace App\Http\Controllers\Admin;

use App\Mat;
use App\Tyre;
use App\Brand;
use App\Wheel;
use App\Accumulator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $brands = Brand::orderBy('created_at','desc')->paginate(10);
        $mats = Mat::with('brands')->orderBy('created_at','desc')->paginate(10);
        $tyres = Tyre::with('brands')->orderBy('created_at','desc')->paginate(10);
        $wheels = Wheel::with('brands')->orderBy('created_at','desc')->paginate(10);
        $accums = Accumulator::with('brands')->orderBy('created_at','desc')->paginate(10);
        return view('admin')->withBrands($brands)->withMats($mats)->withTyres($tyres)->withWheels($wheels)->withAccums($accums);
    }
}
