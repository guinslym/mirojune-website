<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Social;
use Validator;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         $socials = Social::paginate(10);
         return view('socials.socials-list')->with('socials', $socials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('socials.add-new-social');
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
         'icon' => 'required',
         'url' => 'required'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
         return redirect()->back()->withInput()
                          ->with('errors', $validation->errors() );
      }

      $social = new Social;
      $social->icon = $request->input('icon');
      $social->url = $request->input('url');
      $social->save();

      return redirect('/socials')->with('message','You just created a social media icon!');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
    public function show($id)
    {
        //
         $social = Social::find($id);
         return view('socials.show-social')->with('social', $social);
    }
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
         $social = Social::find($id);
         return view('socials.edit-social')->with('social', $social);
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
            'icon' => 'required',
            'url' => 'required'
      ]);

      // Check if it fails //
      if( $validation->fails() ){
            return redirect()->back()->withInput()
                             ->with('errors', $validation->errors() );
      }

      // Process valid data & go to success page //
      $social = Social::find($id);
        
      // replace old data with new data from the submitted form //
      $social->icon = $request->input('icon');
      $social->url = $request->input('url');
      $social->save();

      return redirect('/socials')->with('message','You just updated a social media icon!');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
   {
      $social = Social::find($id);
      $social->delete();
      return redirect('/socials')->with('message','You just deleted a social icon!');
   }
}
