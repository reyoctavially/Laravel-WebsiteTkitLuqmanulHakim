<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/profiles/index', [
            'profiles' => Profile::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('dashboard/profiles/edit', [
            'profile' => $profile
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $rules = [
            'image_satu' => 'image|file|max:1024',
            'image_dua' => 'image|file|max:1024',
            'image_tiga' => 'image|file|max:1024',
            'profil' => 'required',
            'sejarah' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'email' => 'required',
            'whatsapp' => 'required',
            'link_whatsapp' => 'required',
            'link_facebook' => 'required',
            'link_instagram' => 'required',
            'link_youtube' => 'required',
            'link_embed' => 'required',
        ];

        $validateData = $request->validate($rules);

        $currentImage_satu = Profile::find($profile->id)->image_satu;
        if ($request->file('image_satu')) {
            if ($request->image_satu != $currentImage_satu) {

                $images_satu = public_path('img/profile-images/') . $currentImage_satu;

                if (file_exists($images_satu)) {
                    @unlink($images_satu);
                }
                $title_satu = "image satu";
                $validateData['image_satu']->move(public_path('img/profile-images'), $title_satu);
                $validateData['image_satu'] = $title_satu;
            }
        }

        $currentImage_dua = Profile::find($profile->id)->image_dua;
        if ($request->file('image_dua')) {
            if ($request->image_dua != $currentImage_dua) {

                $images_dua = public_path('img/profile-images/') . $currentImage_dua;

                if (file_exists($images_dua)) {
                    @unlink($images_dua);
                }
                $title_dua = "image dua";
                $validateData['image_dua']->move(public_path('img/profile-images'), $title_dua);
                $validateData['image_dua'] = $title_dua;
            }
        }

        $currentImage_tiga = Profile::find($profile->id)->image_tiga;
        if ($request->file('image_tiga')) {
            if ($request->image_tiga != $currentImage_tiga) {

                $images_tiga = public_path('img/profile-images/') . $currentImage_tiga;

                if (file_exists($images_tiga)) {
                    @unlink($images_tiga);
                }
                $title_tiga = "image tiga";
                $validateData['image_tiga']->move(public_path('img/profile-images'), $title_tiga);
                $validateData['image_tiga'] = $title_tiga;
            }
        }

        Profile::where('id', $profile->id)
            ->update($validateData);

        return redirect('/dashboard/profiles')->with('success', 'Profil telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
