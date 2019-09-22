<?php

namespace App\Http\Controllers;

use App\Fimage;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class FimageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fimgs=Fimage::all();
        return view('admin.featureImage.index', compact('fimgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.featureImage.create');
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
        $image_resize->resize(458, 475);
        $image_resize->save(public_path('imgs/features/' .$imagee));

        $fimg=new Fimage();

        $fimg->title=request('title');
        $fimg->img=$imagee;
        $fimg->save();
        request('img')->move(public_path('imgs/features'),$image);

        return redirect('/admin/featureImage');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fimage  $fimage
     * @return \Illuminate\Http\Response
     */
    public function show(Fimage $fimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fimage  $fimage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fimg = Fimage::find($id);
        return view('admin.featureImage.edit',compact('fimg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fimage  $fimage
     * @return \Illuminate\Http\Response
     */
    public function update(Request$request ,$id)

    {
        $fimg = Fimage::find($id);
        if (request()->hasFile('img')) {
            $this->validate($request, [
                'img'=>'required'
            ]);

            $image = request('img');
            $imagee = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(458, 475);
            $image_resize->save(public_path('imgs/fimgs/' . $imagee));
            $fimg->img = $imagee;
            $fimg->save();
            return redirect('/admin/featureImage');
        }

        $fimg->title=request('title');
        $fimg->save();

        return redirect('/admin/featureImage');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fimage  $fimage
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
        {
            $fimg = Fimage::find($id);
            $fimg->delete();
            return back();


    }
}
