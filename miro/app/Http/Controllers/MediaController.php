<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Media;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class MediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
         'userfile'     => 'sometimes|'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
         return redirect()->back()->withInput()
                          ->with('errors', $validation->errors() );
      }

      $media = new Media;
      //dd($request);

      // upload the media //
      $file = $request->file('userfile');
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      if($file){
        Storage::disk('local')->put($filename, File::get($file));
      }
      $destination_path = 'uploads/';
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
         $categories = Category::lists('category', 'id');
         return view('medias.edit-media')->with('media', $media)->with('categories', $categories);
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
            'category' => 'required',
            'userfile'    => 'sometimes|min:1|max:15240'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
      }

      // Process valid data & go to success page //
      $media = Media::find($id);

      // if user choose a file, replace the old one //
      if( $request->hasFile('userfile') ){
           $file = $request->file('userfile');
           $destination_path = 'uploads/';
           $filename = str_random(6).'_'.$file->getClientOriginalName();
           $file->move($destination_path, $filename);
           $media->file = $destination_path . $filename;
      }
        
      // replace old data with new data from the submitted form //
      $media->caption = $request->input('caption');
      $media->description = $request->input('description');
      $media->category = $request->input('category');
      $media->save();

      return redirect('/medias')->with('message','You just updated an Upload!');
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
      return redirect('/medias')->with('message','You just uploaded a File!');
   }
}
