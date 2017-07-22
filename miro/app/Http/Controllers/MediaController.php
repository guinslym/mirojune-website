<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Image;
use App\Media;
use Validator;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         $medias = Media::paginate(10);
         return view('medias.medias-list')->with('medias', $medias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        $categories = Category::lists('category', 'id');
        return view('medias.add-new-media')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
   {
      // Validation //
      $validation = Validator::make($request->all(), [
         'caption'     => 'required|regex:/^[A-Za-z ]+$/',
         'description' => 'required',
         'category' => 'required',
         'userfile'     => 'required|image|mimes:jpeg,png|min:1|max:2000000'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
         return redirect()->back()->withInput()
                          ->with('errors', $validation->errors() );
      }

      $media = new Media;

      // upload the media //
      $file = $request->file('userfile');
      $destination_path = 'uploads/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);
      
      // save media data into database //
      $media->file = $destination_path . $filename;
      $media->caption = $request->input('caption');
      $media->category = $request->input('category');
      $media->description = $request->input('description');
      $media->save();

      return redirect('/medias')->with('message','You just uploaded an media!');
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
         $media = Media::find($id);
         return view('medias.show-media')->with('media', $media);
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
         $media = Media::find($id);
         return view('medias.edit-media')->with('media', $media);
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
      // Validation //
      $validation = Validator::make($request->all(), [
            'caption'     => 'required|regex:/^[A-Za-z ]+$/',
            'description' => 'required',
            'userfile'    => 'sometimes|image|mimes:jpeg,png|min:1|max:250'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
      }

      // Process valid data & go to success page //
      $image = Image::find($id);

      // if user choose a file, replace the old one //
      if( $request->hasFile('userfile') ){
           $file = $request->file('userfile');
           $destination_path = 'uploads/';
           $filename = str_random(6).'_'.$file->getClientOriginalName();
           $file->move($destination_path, $filename);
           $image->file = $destination_path . $filename;
      }
        
      // replace old data with new data from the submitted form //
      $image->caption = $request->input('caption');
      $image->description = $request->input('description');
      $image->save();

      return redirect('/medias')->with('message','You just updated an image!');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
   {
      $media = Media::find($id);
      $media->delete();
      return redirect('/medias')->with('message','You just uploaded an media!');
   }
}
