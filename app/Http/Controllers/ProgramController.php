<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        return view('home/programs/index', [
            "title" => "Program Unggulan",
            "programs" => Program::latest()->paginate(6)->withQueryString(),
            "profiles" => Profile::all(),
            'image' => 'default.jpg'
        ]);
    }

    public function show(Program $program)
    {
        return view('home/programs/show', [
            "title" => "Program Unggulan",
            "program" => $program,
            "profiles" => Profile::all(),
            'image' => 'default.jpg'
        ]);
    }
}
