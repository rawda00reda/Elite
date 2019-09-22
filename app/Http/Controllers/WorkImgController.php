<?php

namespace App\Http\Controllers;

use App\Work;
use App\WorkImg;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class WorkImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $wimgs=WorkImg::all();
       return view('admin.worksImage.index',compact('wimgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $works=Work::all();
        return view('admin.worksImage.create',compact('works'));
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
        ]);

        $image = request('img');
        $imagee = time() .'.' .$image->getClientOriginalExtension();
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(1270, 450);
        $image_resize->save(public_path('imgs/works/' .$imagee));

        $wimg=new WorkImg();
        $wimg->work=request('work');
        $wimg->img=$imagee;
        $wimg->content=request('content');

        $wimg->save();
        request('img')->move(public_path('imgs/works'),$image);
        return redirect('/admin/worksImage');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkImg  $workImg
     * @return \Illuminate\Http\Response
     */
    public function show(WorkImg $workImg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkImg  $workImg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $works=Work::all();
        $wimg=WorkImg::find($id);
        return view('admin.worksImage.edit',compact('wimg','works'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkImg  $workImg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $wimg=WorkImg::find($id);
        if ($request->hasFile('img')) {
            $image = request('img');
            $imagee = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(380, 380);
            $image_resize->save(public_path('imgs/works/' . $imagee));
            $wimg->img=$imagee;
            $wimg->save();
            return redirect('/admin/worksImage');

        }
        $wimg->work=request('work');
        $wimg->content=request('content');
        $wimg->save();
        return redirect('/admin/worksImage');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkImg  $workImg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        $wimg = WorkImg::find($id);
        $wimg->delete();
        return back();
    }
}
