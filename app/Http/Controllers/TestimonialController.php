<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;


class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $tests=Testimonial::all();
        return view('admin.testimonial.index',compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
        $image_resize->resize(120, 120);
        $image_resize->save(public_path('imgs/testimonials/' .$imagee));

        $test=new Testimonial();
        $test->name=request('name');
        $test->img=$imagee;
        $test->content=request('content');
        $test->save();
        request('img')->move(public_path('imgs/testimonials'),$image);
        return redirect('/admin/testimonial');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test = Testimonial::find($id);
        return view('admin.testimonial.edit',compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        $test= Testimonial::find($id);
        if (request()->hasFile('img')) {
            $this->validate($request, [
                'img' => 'required'
            ]);

            $image = request('img');
            $imagee = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(120, 120);
            $image_resize->save(public_path('imgs/testmonials/' . $imagee));

            $test->img = $imagee;
            $test->save();
            return redirect('/admin/testimonial');
        }
        $test->name=request('name');
        $test->content=request('content');
        $test->save();
        return redirect('/admin/testimonial');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Testimonial::find($id);
        $test->delete();
        return back();
    }
}
