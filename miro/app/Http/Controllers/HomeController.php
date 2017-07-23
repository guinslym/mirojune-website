<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profile;
use App\Media;
use App\Category;
use App\User;

class HomeController extends Controller
{
   
    public function index(){
        $medias = Media::where('category', '==', 'painting')->paginate(10);
    	return view('frontend.index')->with('medias', $medias);

    }
    public function about(){
        $profile = Profile::first();
        return view('frontend.about')->with('profile', $profile);
    	
    }
    public function contact(){
        //On profile I need to be about to add email
        return view('frontend.contact');
    	
    }
    public function thanks(){
    	return view('frontend.thanks');
    }
    public function paintings(){
    	return view('frontend.paintings');
    }
    public function archive(){
    	return view('frontend.archive');
    }
}
