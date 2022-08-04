<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Aboutus;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Aboutus.display');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $aboutus = new Aboutus();
            $aboutus->description_about = $request->input('description_about');
            if($request->has('image_about')){
                $img = $request->file('image_about')->store('image','public');
                $aboutus->image_about = $img;
            }

            $aboutus->save();
            return view('Aboutus.display');

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
        $aboutus = Aboutus::find($id);
        return view('Aboutus.update')->with('aboutus',$aboutus);

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
        $aboutus = Aboutus::find($id);
        $aboutus->description_about = $request->input('description_about');
        if($request->has('image_about')){
            $img = $request->file('image_about')->store('image','public');
            $aboutus->image_about = $img;
        }

        $aboutus->save();
        return view('Aboutus.display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutus = Aboutus::find($id);

        $aboutus->delete();

        return view('Aboutus.display');
    }
}
