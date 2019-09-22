<?php

namespace App\Http\Controllers;

use App\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $achievs=Achievement::all();
       return view('admin.achievements.index',compact('achievs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.achievements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'icon'=>'required',
            'number'=>'required',
            'text'=>'required'

        ]);

        $achiev=new Achievement();
        $achiev->icon=request('icon');
        $achiev->text=request('text');
        $achiev->number=request('number');
        $achiev->save();
        return redirect('/admin/achievements');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement $achievement)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $achiev=Achievement::find($id);
        return view('admin.achievements.edit',compact('achiev'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request$request ,$id)
    {
        $this->validate($request , [
            'icon'=>'required',
            'number'=>'required',
            'text'=>'required'

        ]);

        $achiev=Achievement::find($id);
        $achiev->icon=request('icon');
        $achiev->number=request('number');
        $achiev->text=request('text');
        $achiev->save();
        return redirect('/admin/achievements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $achiev = Achievement::find($id);
        $achiev->delete();
        return back();

    }
}
