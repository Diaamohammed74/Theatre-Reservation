<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\Movie\CreateMovieRequset;
use App\Http\Requests\Movie\UpdateMovieRequset;

class MovieController extends Controller
{

    public function index()
    {
        $movies = Movie::latest()->get();
        return view('back.Movies.index', compact('movies'));
    }

    public function create()
    {
        return view('back.Movies.create');
    }

      /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMovieRequset $createMovieRequset)
    {
        $movie = Movie::create($createMovieRequset->validated());
        return back()->with(['message' => __('lang.added'), 'type' => 'success']);
    }

      /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
          //
    }

      /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('back.Movies.edit', compact('movie'));
    }

      /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequset $updateMovieRequset, Movie $movie)
    {
        $movie->update($updateMovieRequset->validated());
        return redirect()->route('dashboard.movies.index')->with(['message' => __('lang.updated'), 'type' => 'success']);
    }

      /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('dashboard.movies.index')->with(['message' => __('lang.deleted'), 'type' => 'danger']);
    }
}
