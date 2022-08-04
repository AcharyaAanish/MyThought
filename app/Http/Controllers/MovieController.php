<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movies;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('Movie.display');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Movie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movies = new Movies();

        $movies->title_movies = $request->input('title_movies');
        $movies->rating_movies = $request->input('rating_movies');
        $movies->type_movies = $request->input('type_movies');
        $movies->description_movies = $request->input('description_movies');
        $movies->release_date = $request->input('release_date');
        $movies->author_name = $request->input('author_name');
        $movies->director_name = $request->input('director_name');
        $movies->cast_name = $request->input('cast_name');
        if($request->has('image_movies')){
            $img = $request->file('image_movies')->store('image','public');
            $movies->image_movies = $img;
        }
        $movies->save();

        return view('Movie.display');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movies = Movies::find($id);

        return view('Movie.update')->with('movies',$movies);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movies = Movies::find($id);
        $movies->title_movies = $request->input('title_movies');
        $movies->rating_movies = $request->input('rating_movies');
        $movies->type_movies = $request->input('type_movies');
        $movies->description_movies = $request->input('description_movies');
        $movies->release_date = $request->input('release_date');
        $movies->author_name = $request->input('author_name');
        $movies->director_name = $request->input('director_name');
        $movies->cast_name = $request->input('cast_name');
        if($request->has('image_movies')){
            $img = $request->file('image_movies')->store('image','public');
            $movies->image_movies = $img;
        }
        $movies->save();

        return view('Movie.display');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movies = Movies::find($id);

        $movies->delete();

        return view('Movie.display');
    }
    public function search(Request $request){
        $search = $request['searchmovies'] ?? "";
        // $search = $_GET['query'];
        if($search != ''){
            $movies = Movies::where('title_movies','like','%'.$search.'%')->orwhere('type_movies', 'like','%'.$search.'%')->latest()->paginate(5);
        }
        else{
            $movies = Movies::latest()->paginate(3);
        }
        return view('Search.searchmovies',compact('movies'));
    }
}
