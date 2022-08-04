<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Takeme;

class TakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Takeme.display');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Takeme.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $takeme = new Takeme();

        $takeme->product_name = $request->input('product_name');
        $takeme->product_cost = $request->input('product_cost');
        $takeme->product_discount =$request->input('product_discount');
        if($request->has('image_takeme')){
            $img = $request->file('image_takeme')->store('image','public');
            $takeme->image_takeme = $img;
        }
        $takeme->save();
        return view('Takeme.display');
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
        $takeme = Takeme::find($id);
        return view('Takeme.update')->with('takeme',$takeme);
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
        $takeme = Takeme::find($id);
        $takeme->product_name = $request->input('product_name');
        $takeme->product_cost = $request->input('product_cost');
        $takeme->product_discount =$request->input('product_discount');
        if($request->has('image_takeme')){
            $img = $request->file('image_takeme')->store('image','public');
            $takeme->image_takeme = $img;
        }
        $takeme->save();
        return view('Takeme.display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $takeme = Takeme::find($id);
        $takeme->delete();

        return view('Takeme.display');
    }
    public function search(Request $request){
        $search = $request['searchtakeme'] ?? "";
        // $search = $_GET['query'];
        if($search != ''){
            $takemes = Takeme::where('product_name','like','%'.$search.'%')->orwhere('product_cost', 'like','%'.$search.'%')->latest()->paginate(5);
        }
        else{
            $takemes = Takeme::latest()->paginate(3);
        }
        return view('Search.searchtakeme',compact('takemes'));
    }
}
