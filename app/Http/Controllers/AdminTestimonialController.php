<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminTestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/testimonials/index', [
            'testimonials' => Testimonial::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/testimonials/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'status' => 'required|min:3|max:255',
            'body' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $name = $validateData['name'] . '.' . $validateData['image']->getClientOriginalExtension();
            $validateData['image']->move(public_path('img/testimonial-images'), $name);
            $validateData['image'] = $name;
        }

        Testimonial::create($validateData);

        return redirect('/dashboard/testimonials')->with('success', 'Testimoni telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        return view('dashboard/testimonials/show', [
            'testimonial' => $testimonial,
            'image' => 'default.png'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('dashboard/testimonials/edit', [
            'testimonial' => $testimonial
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $rules = [
            'name' => 'required|max:255',
            'status' => 'required|min:3|max:255',
            'body' => 'required',
            'image' => 'image|file|max:1024'
        ];
        $validateData = $request->validate($rules);

        $currentImage = Testimonial::find($testimonial->id)->image;
        if ($request->file('image')) {
            if ($request->image != $currentImage) {

                $images = public_path('img/testimonial-images/') . $currentImage;

                if (file_exists($images)) {
                    @unlink($images);
                }
                $name = $validateData['name'] . '.' . $validateData['image']->getClientOriginalExtension();
                $validateData['image']->move(public_path('img/testimonial-images'), $name);
                $validateData['image'] = $name;
            }
        }

        Testimonial::where('id', $testimonial->id)
            ->update($validateData);

        return redirect('/dashboard/testimonials')->with('success', 'Testimoni telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if (File::exists(public_path('img/testimonial-images/' . $testimonial->image))) {
            File::delete(public_path('img/testimonial-images/' . $testimonial->image));
        }
        Testimonial::destroy($testimonial->id);
        return redirect('/dashboard/testimonials')->with('success', 'Testimoni telah dihapus');
    }
}
