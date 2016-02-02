<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Validator;
use Redirect;
use Session;

class ImgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
        //dd($images);
        return view('img.user', ['images' => $images]);    
    }

    public function moderator()
    {
        //dd($images);
        $images = Image::pending()->get();
        return view('img.moderator', ['images' => $images]);    
    }

        
    public function setapproved($id)
    {
        Image::approve($id);
        return redirect('image/moderator');   
    }

       public function setrejected($id)
    {
        Image::reject($id);
        return redirect('image/moderator');   
    }

    public function all()
    {
        $images = Image::withAnyStatus()->get();
        return view('img.moderator', ['images' => $images]);    
    }

        

    public function rejected()
    {
        $images = Image::rejected()->get();
        return view('img.moderator', ['images' => $images]);     
    }



    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('img.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $image = new Image();
        
        $imageName = substr( md5(rand()), 0, 7) . '.' . 
        $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(
            base_path() . '/public/img/', $imageName
        );

        $image->file_name = $imageName;

        $image->save();

        return Redirect::route('image.index');
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
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
