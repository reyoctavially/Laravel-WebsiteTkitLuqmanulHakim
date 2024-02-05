<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/activities/index', [
            'activities' => Activity::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/activities/create');
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
            'slug' => 'required|unique:activities',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $title = $validateData['title'] . '.' . $validateData['image']->getClientOriginalExtension();
            $validateData['image']->move(public_path('img/activity-images'), $title);
            $validateData['image'] = $title;
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Activity::create($validateData);

        return redirect('/dashboard/activities')->with('success', 'Aktivitas sekolah baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        return view('dashboard/activities/show', [
            'activity' => $activity,
            'image' => 'default.jpg'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('dashboard/activities/edit', [
            'activity' => $activity
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if ($request->slug != $activity->slug) {
            $rules['slug'] = 'required|unique:activities';
        }

        $validateData = $request->validate($rules);

        $currentImage = Activity::find($activity->id)->image;
        if ($request->file('image')) {
            if ($request->image != $currentImage) {

                $images = public_path('img/activity-images/') . $currentImage;

                if (file_exists($images)) {
                    @unlink($images);
                }
                $title = $validateData['title'] . '.' . $validateData['image']->getClientOriginalExtension();
                $validateData['image']->move(public_path('img/activity-images'), $title);
                $validateData['image'] = $title;
            }
        }
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Activity::where('id', $activity->id)
            ->update($validateData);

        return redirect('/dashboard/activities')->with('success', 'Aktivitas sekolah telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        if (File::exists(public_path('img/activity-images/' . $activity->image))) {
            File::delete(public_path('img/activity-images/' . $activity->image));
        }
        Activity::destroy($activity->id);
        return redirect('/dashboard/activities')->with('success', 'Aktivitas sekolah telah dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Activity::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
