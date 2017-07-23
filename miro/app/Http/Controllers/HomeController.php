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
    	
    }
    public function contact(){
    	
    }
    public function thanks(){
    	
    }
    public function paintings(){
    	
    }
    public function painting(){
    	
    }
}
