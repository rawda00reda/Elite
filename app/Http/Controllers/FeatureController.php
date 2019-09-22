<?php

namespace App\Http\Controllers;

use App\Feature;
use Illuminate\Http\Request;


class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features=Feature::all();
        return view('admin.featurs.index',compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.featurs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $feature=new Feature();
        $feature->icon=request('icon');
        $feature->title=request('title');
        $feature->content=request('content');
//        $feature->img=$imagee;

        $feature->save();
//        request('img')->move(public_path('imgs/features'),$image);
        return redirect('/admin/featurs')->with('success','تم اضافه البيانات بنجاح');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feature = Feature::find($id);

        return view('admin.featurs.edit',compact('feature'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $feature= Feature::find($id);

        $feature->icon=request('icon');
        $feature->title=request('title');
        $feature->content=request('content');
        $feature->save();

            return redirect('/admin/featurs')->with('success','تم اضافه البيانات بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feature  $feature
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feature $feature)
    {
        //
    }
}
