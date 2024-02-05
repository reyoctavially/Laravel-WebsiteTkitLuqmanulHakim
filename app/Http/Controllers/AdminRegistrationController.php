<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/registrations/index', [
            'registrations' => Registration::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/registrations/create');
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
            'title' => 'required|max:255',
            'slug' => 'required|unique:registrations',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);
        if ($request->file('image')) {
            if ($request->file('image')) {
                $title = $validateData['title'] . '.' . $validateData['image']->getClientOriginalExtension();
                $validateData['image']->move(public_path('img/registration-images'), $title);
                $validateData['image'] = $title;
            }
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Registration::create($validateData);

        return redirect('/dashboard/registrations')->with('success', 'Info registrasi baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        return view('dashboard/registrations/show', [
            'registration' => $registration,
            'image' => 'default.jpg'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(Registration $registration)
    {
        return view('dashboard/registrations/edit', [
            'registration' => $registration
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registration $registration)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if ($request->slug != $registration->slug) {
            $rules['slug'] = 'required|unique:registrations';
        }

        $validateData = $request->validate($rules);

        $currentImage = Registration::find($registration->id)->image;
        if ($request->file('image')) {
            if ($request->image != $currentImage) {

                $images = public_path('img/registration-images/') . $currentImage;

                if (file_exists($images)) {
                    @unlink($images);
                }
                $title = $validateData['title'] . '.' . $validateData['image']->getClientOriginalExtension();
                $validateData['image']->move(public_path('img/registration-images'), $title);
                $validateData['image'] = $title;
            }
        }
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Registration::where('id', $registration->id)
            ->update($validateData);

        return redirect('/dashboard/registrations')->with('success', 'Info registrasi telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Registration $registration)
    {
        if (File::exists(public_path('img/registration-images/' . $registration->image))) {
            File::delete(public_path('img/registration-images/' . $registration->image));
        }
        Registration::destroy($registration->id);
        return redirect('/dashboard/registrations')->with('success', 'Info registrasi telah dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Registration::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
