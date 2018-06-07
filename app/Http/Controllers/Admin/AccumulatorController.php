<?php

namespace App\Http\Controllers\Admin;

use App\Accumulator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AccumulatorController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accum = Accumulator::create($request->all());
        if($request->hasFile('image'))
            Storage::putFileAs(
                'public/images/accums', $request->file('image'), $accum->id
            );
        $accum->brands()->attach($request->brands);
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $accum = Accumulator::find($id);
        $accum->update($request->all());
        if($request->hasFile('image'))
            Storage::putFileAs(
                'public/images/accums', $request->file('image'), $accum->id
            );
        $accum->brands()->detach();
        $accum->brands()->attach($request->brands);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $accum = Accumulator::find($id);
        if(Storage::exists('public/images/accums/' . $accum->id))
            Storage::delete('public/images/accums/' . $accum->id);
        $accum->brands()->detach();
        $accum->delete();
        return back();
    }
}
