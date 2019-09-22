<?php

namespace App\Http\Controllers;

use App\Advantage;
use Illuminate\Http\Request;

class AdvantageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advs = Advantage::all();
        return view('admin.advantage.index',compact('advs'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.advantage.create');


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
            'title'=>'required',
            'content'=>'required'
        ]);

        $adv=new Advantage();
        $adv->icon=request('icon');
        $adv->title=request('title');
        $adv->content=request('content');
        $adv->save();
        return redirect('/admin/advantage')->with('success','تم اضافه البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param
     * @return \Illuminate\Http\Response
     */
    public function show(Advantage $adv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $adv = Advantage::find($id);
        return view('admin.advantage.edit',compact('adv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param
     * @return \Illuminate\Http\Response
     */

    public function update(Request$request ,$id)
    {

        $adv=Advantage::find($id);
        $adv->icon=request('icon');
        $adv->title=request('title');
        $adv->content=request('content');
        $adv->save();
        return redirect('/admin/advantage')->with('success','تم اضافه البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {

        $adv = Advantage::find($id);
        $adv->delete();
        return back();

    }
}
