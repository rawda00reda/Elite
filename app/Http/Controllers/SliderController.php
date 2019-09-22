<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('admin.slider.create');


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
        $image_resize->save(public_path('imgs/sliders/' .$imagee));

        $slider=new Slider();
        $slider->img=$imagee;
        $slider->title=request('title');
        $slider->content=request('content');
        $slider->save();
        request('img')->move(public_path('imgs/sliders'),$image);
        return redirect('/admin/slider')->with('success','تم اضافه البيانات بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $slider = Slider::find($slider->id);
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request$request ,$id)
    {
        $slider= Slider::find($id);
        if (request()->hasFile('img')) {
            $this->validate($request, [
                'img' => 'required'
            ]);

            $image = request('img');
            $imagee = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(1270, 450);
            $image_resize->save(public_path('imgs/sliders/' . $imagee));

            $slider->img = $imagee;
            $slider->save();
            return redirect('/admin/slider')->with('success', 'تم تعديل البيانات بنجاح');
        }
        $slider->title=request('title');
        $slider->content=request('content');
        $slider->save();
        return redirect('/admin/slider')->with('success','تم اضافه البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {

        $slider = Slider::find($slider->id);
        $slider->delete();
        return back();

    }
}
