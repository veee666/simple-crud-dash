<?php

namespace App\Http\Controllers;

use App\Models\library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $library = library::all();
        
        return view('index',[
            'library'=>$library
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'author'=>'required',
            'genre'=>'required',
            'released'=>'required',
            'summary'=>'required'
        ]);

        $library = new library;

        $library->name = $request->name;
        $library->author = $request->author;
        $library->genre = $request->genre;
        $library->released = $request->released;
        $library->summary = $request->summary;

        $library->save();

        return redirect()->route('library.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(library $library)
    {
        return view('show', compact('library'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(library $library)
    {
        $library = library::find($library->id);
        return view('edit', compact('library'));
    }

    /**
     * Update the specified resource in storage.    
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, library $library)
    {
        $request->validate([
            'name'=>'required',
            'author'=>'required',
            'genre'=>'required',
            'released'=>'required',
            'summary'=>'required'
        ]);

        $library = library::find($request->hidden_id);

        $library->name = $request->name;
        $library->author = $request->author;
        $library->genre = $request->input('genre');
        $library->released = $request->released;

        $library->save();

        return redirect()->route('library.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(library $library)
    {
        $library->delete();

        return redirect()->route('library.index');
    }
}
