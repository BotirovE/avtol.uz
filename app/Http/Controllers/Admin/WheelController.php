<?php

namespace App\Http\Controllers\Admin;

use App\Wheel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class WheelController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wheel = Wheel::create($request->all());
        if($request->hasFile('image'))
            Storage::putFileAs(
                'public/images/wheels', $request->file('image'), $wheel->id
            );
        $wheel->brands()->attach($request->brands);
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
        $wheel = Wheel::find($id);
        $wheel->update($request->all());
        if($request->hasFile('image'))
            Storage::putFileAs(
                'public/images/wheels', $request->file('image'), $wheel->id
            );
        $wheel->brands()->detach();
        $wheel->brands()->attach($request->brands);
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
        $wheel = Wheel::find($id);
        if(Storage::exists('public/images/wheels/' . $wheel->id))
            Storage::delete('public/images/wheels/' . $wheel->id);
        $wheel->brands()->detach();
        $wheel->delete();
        return back();
    }
}
