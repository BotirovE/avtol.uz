<?php

namespace App\Http\Controllers\Admin;

use App\Mat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MatController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mat = Mat::create($request->all());
        if($request->hasFile('image'))
            Storage::putFileAs(
                'public/images/mats', $request->file('image'), $mat->id
            );
        $mat->brands()->attach($request->brands);
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
        $mat = Mat::find($id);
        $mat->update($request->all());
        if($request->hasFile('image'))
            Storage::putFileAs(
                'public/images/mats', $request->file('image'), $mat->id
            );
        $mat->brands()->detach();
        $mat->brands()->attach($request->brands);
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
        $mat = Mat::find($id);
        if(Storage::exists('public/images/mats/' . $mat->id))
            Storage::delete('public/images/mats/' . $mat->id);
        $mat->brands()->detach();
        $mat->delete();
        return back();
    }
}
