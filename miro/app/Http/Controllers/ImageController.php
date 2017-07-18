<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Image;
use Validator;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         $images = Image::paginate(10);
         return view('images-list')->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('add-new-image');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|image'
        ]);
        if ($validator->fails()) {
            throw new ValidationException($validator);
        }
        $file = 'images/' . uniqid() . '.' . $request->file->extension();
        $image = Image::create(['file' => $file]);
        $path = $request->file->storeAs('public', $file);
        return response()->json(['link' => $image->url]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
         $image = Image::find($id);
         return view('image-detail')->with('image', $image);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
         $image = Image::find($id);
         return view('edit-image')->with('image', $image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $image = new image();
        $image->delete_user_images($id);
        
        //return Redirect::to('home');
        return 'image just deleted';
    }
}
