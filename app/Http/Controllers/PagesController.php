<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Accumulator;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function accum()
    {
        $accum_brand = Brand::has('accums')->pluck('name');
        $car_brand = Brand::where('isCar', 1)->pluck('name');
        $accum = Accumulator::with('brands')->paginate(10);
        return view('accum')->withAccum($accum)->withAccumBrand($accum_brand)->withCarBrand($car_brand);
    }
}
