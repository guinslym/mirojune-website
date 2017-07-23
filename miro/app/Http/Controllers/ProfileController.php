<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profile;
use Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $profiles = Profile::paginate(10);
         return view('profiles.profiles-list')->with('profiles', $profiles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('profiles.add-new-profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {
      // Validation //
      $validation = Validator::make($request->all(), [
         'about_me' => 'required',
         'video_ogg'    => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm|min:1|max:3240',
         'video_mp4'    => 'required|mimes:mp4,mov,ogg,qt,webm|min:1|max:3240'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
         return redirect()->back()->withInput()
                          ->with('errors', $validation->errors() );
      }

      $profile = new Profile;
      //dd($request);
      //dd($request->files);
      //dd($request->input('video_ogg'));
      //$v_ogg = $request->input('video_ogg');
      //dd($v_ogg->mimeType);

      
      // save media data into database //
      $profile->about_me = $request->input('about_me');
      $profile->video_mp4 = $request->file('video_mp4');
      $profile->video_ogg = $request->file('video_ogg');
      $profile->save();

      return redirect('/profile')->with('message','You just created your profile!');
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
         $profile = Profile::find($id);
         return view('profiles.show-profile')->with('profile', $media);
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
         $profile = Profile::find($id);
         return view('profiles.edit-profile')->with('profile', $profile);
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
      // Validation //
      $validation = Validator::make($request->all(), [
         'about_me' => 'required',
         'video_ogg'    => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm|min:1|max:3240',
         'video_mp4'    => 'required|mimes:mp4,mov,ogg,qt,webm|min:1|max:3240'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
      }

      // Process valid data & go to success page //
      $profile = Profile::find($id);

      // save media data into database //
      $profile->about_me = $request->input('about_me');
      $profile->video_mp4 = $request->input('video_mp4');
      $profile->video_ogg = $request->input('video_ogg');
      $profile->save();

      return redirect('/profile')->with('message','You just updated your Profile');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
   {
      $profiles = Profile::find($id);
      $profiles->delete();
      return redirect('/profile')->with('message','You just deleted your profile!');
   }
}
