<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth', ['except'=>['index',"show"]]);
    }

    public function index()
    {
        //
        //return view("createlisting");
        $listings=Listing::orderBy('created_at','desc')->get();
        return view("listing")->with('listings',$listings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       

        return view("createlisting");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email'
        ]);
        
        $listing=new Listing;
        $listing->name=$request->name;
        $listing->website=$request->website;
        $listing->email=$request->email;
        $listing->phone=$request->phone;
        $listing->address=$request->address;
        $listing->bio=$request->bio;
        $listing->user_id=auth()->user()->id;
        
        $listing->save();

        return redirect('/dashboard')->with('success',"listing successfully created");
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing=new Listing;
        $listing=$listing::find($id);
        return view('showlisting',compact('listing'));
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
        //
        $listing=new Listing;
        $listing=$listing::find($id);
        return view('edit',compact('listing'));
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
        //
        $this->validate($request,[
            'name'=>'required',
            'email'=>'email'
        ]);
        
        $listing=Listing::find($id);
        $listing->name=$request->name;
        $listing->website=$request->website;
        $listing->email=$request->email;
        $listing->phone=$request->phone;
        $listing->address=$request->address;
        $listing->bio=$request->bio;
        $listing->user_id=auth()->user()->id;
        
        $listing->save();

        return redirect('/dashboard')->with('success',"listing successfully edited");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing=Listing::find($id);
        $listing->delete();
        return redirect('/dashboard')->with('success',"listing successfully deleted");


        //
    }
}
