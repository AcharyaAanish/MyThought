<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Books.display');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $books = new Books();

        $books->title_books = $request->input('title_books');
        $books->rating_books = $request->input('rating_books');
        $books->type_books = $request->input('type_books');
        $books->description_books = $request->input('description_books');
        $books->publish_date = $request->input('publish_date');
        $books->author_name = $request->input('author_name');
        $books->writer_name = $request->input('writer_name');
        if($request->has('image_books')){

            $img = $request->file('image_books')->store('image','public');
            $books->image_books = $img;
        }
        $books->save();

        return view('Books.display');


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
        $books = Books::find($id);

        return view('Books.update')->with('books',$books);
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
        $books = Books::find($id);
        $books->title_books = $request->input('title_books');
        $books->rating_books = $request->input('rating_books');
        $books->type_books = $request->input('type_books');
        $books->description_books = $request->input('description_books');
        $books->publish_date = $request->input('publish_date');
        $books->author_name = $request->input('author_name');
        $books->writer_name = $request->input('writer_name');
        if($request->has('image_books')){

            $img = $request->file('image_books')->store('image','public');
            $books->image_books = $img;
        }
        $books->save();

        return view('Books.display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $books = Books::find($id);

        $books->delete();

        return view('Books.display');
    }

    public function search(Request $request){
        $search = $request['searchbooks'] ?? "";
        // $search = $_GET['query'];
        if($search != ''){
            $books = Books::where('title_books','like','%'.$search.'%')->orwhere('type_books', 'like','%'.$search.'%')->latest()->paginate(5);
        }
        else{
            $books = Books::latest()->paginate(3);
        }
        return view('Search.searchbooks',compact('books'));
    }
}
