<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Blog.display');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogs = new Blog();

        $blogs->title_blog = $request->input('title_blog');
        $blogs->description_blog = $request->input('description_blog');
        $blogs->author_name = $request->input('author_name');
        if($request->has('image_blog')){

            $img = $request->file('image_blog')->store('image','public');
            $blogs->image_blog = $img;
        }
        $blogs->save();
        return view('Blog.display');
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
        $blogs = Blog::find($id);

        return view('Blog.update')->with('blogs', $blogs);
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
        $blogs = Blog::find($id);
        $blogs->title_blog = $request->input('title_blog');
        $blogs->description_blog = $request->input('description_blog');
        $blogs->author_name = $request->input('author_name');
        if($request->has('image_blog')){

            $img = $request->file('image_blog')->store('image','public');
            $blogs->image_blog = $img;
        }
        $blogs->save();
        return view('Blog.display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = BLog::find($id);

        $blogs->delete();

        return view('Blog.display');
    }
    public function search(Request $request){
        $search = $request['searchblogs'] ?? "";
        // $search = $_GET['query'];
        if($search != ''){
            $blogs = Blog::where('title_blog','like','%'.$search.'%')->orwhere('description_blog', 'like','%'.$search.'%')->latest()->paginate(5);
        }
        else{
            $blogs = Blog::latest()->paginate(3);
        }
        return view('Search.searchblogs',compact('blogs'));
    }
}
