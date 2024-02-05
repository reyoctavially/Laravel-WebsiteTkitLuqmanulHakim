<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Profile;
use App\Models\Program;

class ActivityController extends Controller
{
    public function index()
    {
        return view('home/activities/index', [
            "title" => "Aktivitas Sekolah",
            "activities" => Activity::latest()->paginate(6)->withQueryString(),
            "profiles" => Profile::all(),
            'image' => 'default.jpg'
        ]);
    }

    public function show(Activity $activity)
    {
        return view('home/activities/show', [
            "title" => "Aktivitas Sekolah",
            "activity" => $activity,
            "profiles" => Profile::all(),
            'image' => 'default.jpg'
        ]);
    }
}
