<?php

namespace App\Http\Controllers\Admin;

use App\Tyre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TyreController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tyre = Tyre::create($request->all());
        if($request->hasFile('image'))
            Storage::putFileAs(
                'public/images/tyres', $request->file('image'), $tyre->id
            );
        $tyre->brands()->attach($request->brands);
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
        $tyre = Tyre::find($id);
        $tyre->update($request->all());
        if($request->hasFile('image'))
            Storage::putFileAs(
                'public/images/tyres', $request->file('image'), $tyre->id
            );
        $tyre->brands()->detach();
        $tyre->brands()->attach($request->brands);
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
        $tyre = Tyre::find($id);
        if(Storage::exists('public/images/tyres/' . $tyre->id))
            Storage::delete('public/images/tyres/' . $tyre->id);
        $tyre->brands()->detach();
        $tyre->delete();
        return back();
    }
}
