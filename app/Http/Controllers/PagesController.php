<?php

namespace App\Http\Controllers;

use App\Mat;
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
        $size = array();
        $accums = Accumulator::paginate(10);
        $name = Accumulator::pluck('name')->unique();
        $car = Brand::where('isCar', 1)->pluck('name');
        $capacity = Accumulator::pluck('capacity')->unique();
        $brand = Brand::has('accums')->where('isCar',0)->pluck('name');
        foreach($accums as $accum)
        {
            array_push($size,$accum->height . 'x' . $accum->width . 'x' . $accum->length);
        }
        array_unique($size);
        return view('accum')->with('car', $car)
                            ->with('size', $size)
                            ->with('name', $name)
                            ->with('brand', $brand)
                            ->with('accums', $accums)
                            ->with('capacity', $capacity);
    }

    /**
     * Show the tyre catalogue.
     *
     * @return \Illuminate\Http\Response
     */
    public function tyres()
    {
        $tyres = Tyre::paginate(10);
        $size = Tyre::pluck('size')->unique();
        $season = Tyre::pluck('season')->unique();
        $category = Tyre::pluck('category')->unique();
        $diameter = Tyre::pluck('diameter')->unique();
        $brand = Brand::has('tyres')->where('isCar',0)->pluck('name');
        
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
        $wheels = Wheel::paginate(10);
        $gap = Wheel::pluck('gap')->unique();
        $size = Wheel::pluck('size')->unique();
        $color = Wheel::pluck('color')->unique();
        $brand = Brand::has('wheels')->pluck('name');
        $diameter = Wheel::pluck('diameter')->unique();
        
        return view('rims')->with('gap', $gap)
                           ->with('size', $size)
                           ->with('color', $color)
                           ->with('brand', $brand)
                           ->with('wheels', $wheels)
                           ->with('diameter', $diameter);
    }

    public function mats()
    {
        $mats = Mat::paginate(10);
        $color = Mat::pluck('color')->unique();
        $brand = Brand::has('mats')->pluck('name');
        
        return view('carpet')->with('mats', $mats)
                             ->with('color', $color)
                             ->with('brand', $brand);
    }
}
