<?php

namespace App\Http\Controllers;

use App\Tyre;
use App\Brand;
use App\Wheel;
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
     * Show the accumulator catalogue.
     *
     * @return \Illuminate\Http\Response
     */
    public function accums()
    {
        $brand = Brand::has('accums')->where('isCar',0)->pluck('name');
        $car = Brand::where('isCar', 1)->pluck('name');
        $accums = Accumulator::with('brand')->with('car')->paginate(10);
        return view('accum')->with('car', $car)
                            ->with('brand', $brand)
                            ->with('accums', $accums);
    }

    /**
     * Show the tyre catalogue.
     *
     * @return \Illuminate\Http\Response
     */
    public function tyres()
    {
        $size = Tyre::pluck('size')->unique();
        $season = Tyre::pluck('season')->unique();
        $tyres = Tyre::with('brands')->paginate(10);
        $brand = Brand::has('tyres')->pluck('name');
        $category = Tyre::pluck('category')->unique();
        $diameter = Tyre::pluck('diameter')->unique();
        
        return view('tyres')->with('size', $size)
                            ->with('tyres', $tyres)
                            ->with('brand', $brand)
                            ->with('season', $season)
                            ->with('category', $category)
                            ->with('diameter', $diameter);
    }

    /**
     * Show the wheel catalogue.
     *
     * @return \Illuminate\Http\Response
     */
    public function wheels()
    {
        $gap = Wheel::pluck('gap')->unique();
        $size = Wheel::pluck('size')->unique();
        $brand = Brand::has('wheels')->pluck('name');
        $wheels = Wheel::with('brands')->paginate(10);
        $diameter = Wheel::pluck('diameter')->unique();
        
        return view('rims')->with('gap', $gap)
                           ->with('size', $size)
                           ->with('brand', $brand)
                           ->with('wheels', $wheels)
                           ->with('diameter', $diameter);
    }
}
