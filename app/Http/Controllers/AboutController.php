<?php

namespace App\Http\Controllers;

use App\About;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts =About::all();
        return view('admin.about.index',compact('abouts'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.about.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {$this->validate($request , [
    ]);

        $image = request('img');
        $imagee = time() .'.' .$image->getClientOriginalExtension();
        $image_resize = Image::make($image->getRealPath());
        $image_resize->resize(455, 480);
        $image_resize->save(public_path('imgs/aboutUs/' .$imagee));

        $about=new About();
        $about->img=$imagee;
        $about->title=request('title');
        $about->content=request('content');
        $about->save();
        request('img')->move(public_path('imgs/aboutUs'),$image);
        return redirect('/admin/about')->with('success','تم اضافه البيانات بنجاح');}

    public function show(About $adv)
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
        $about = About::find($id);
        return view('admin.about.edit',compact('about'));
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
        $about= About::find($id);
        if (request()->hasFile('img')) {
            $this->validate($request, [
                'img' => 'required'
            ]);

            $image = request('img');
            $imagee = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(455, 480);
            $image_resize->save(public_path('imgs/aboutUs/' . $imagee));

            $about->img = $imagee;
            $about->save();
            return redirect('/admin/about')->with('success', 'تم تعديل البيانات بنجاح');
        }
        $about->title=request('title');
        $about->content=request('content');
        $about->save();
        return redirect('/admin/about')->with('success','تم اضافه البيانات بنجاح');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {

        $about = About::find($id);
        $about->delete();
        return back();

    }
}
