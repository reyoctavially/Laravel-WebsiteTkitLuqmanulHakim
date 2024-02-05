<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/programs/index', [
            'programs' => Program::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard/programs/create');
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
            'slug' => 'required|unique:programs',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $title = $validateData['title'] . '.' . $validateData['image']->getClientOriginalExtension();
            $validateData['image']->move(public_path('img/program-images'), $title);
            $validateData['image'] = $title;
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Program::create($validateData);

        return redirect('/dashboard/programs')->with('success', 'Program unggulan baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        return view('dashboard/programs/show', [
            'program' => $program,
            'image' => 'default.jpg'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        return view('dashboard/programs/edit', [
            'program' => $program
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if ($request->slug != $program->slug) {
            $rules['slug'] = 'required|unique:programs';
        }

        $validateData = $request->validate($rules);

        $currentImage = Program::find($program->id)->image;
        if ($request->file('image')) {
            if ($request->image != $currentImage) {

                $images = public_path('img/program-images/') . $currentImage;

                if (file_exists($images)) {
                    @unlink($images);
                }
                $title = $validateData['title'] . '.' . $validateData['image']->getClientOriginalExtension();
                $validateData['image']->move(public_path('img/program-images'), $title);
                $validateData['image'] = $title;
            }
        }
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Program::where('id', $program->id)
            ->update($validateData);

        return redirect('/dashboard/programs')->with('success', 'Program unggulan telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        if (File::exists(public_path('img/program-images/' . $program->image))) {
            File::delete(public_path('img/program-images/' . $program->image));
        }
        Program::destroy($program->id);
        return redirect('/dashboard/programs')->with('success', 'Program unggulan telah dihapus');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Program::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
