<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profile;
use App\Media;
use App\Category;
use App\User;
use App\Social;
use View;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    public function __construct()
      {
        //its just a dummy data object.
        $socials = Social::all();

        // Sharing is caring
        View::share('socials', $socials);
      }
   
    public function index(){
        $socials = Social::all();
        $medias = Media::where('category', '==', 'painting')->limit(3)->orderBy('created_at', 'desc');
        $video_webm = Media::orderBy('created_at', 'desc');
        $video_mp4 = Media::where('category', 'HomeVideo_mp4')->orderBy('created_at', 'desc')->get()->first();
        $video_ogg = Media::where('category', 'HomeVideo_ogg')->orderBy('created_at', 'desc')->get()->first();
        //to the same as in other...
    	return view('frontend.index')
                ->with('medias', $medias)
                ->with('video_mp4', $video_mp4->file)
                ->with('video_ogg', $video_ogg->file);

    }
    public function about(){
        $profile = Profile::first();
         $socials = Social::all();
        $about_me_pic = Media::where('category', 'About me picture')->orderBy('created_at', 'desc')->get()->first();
        return view('frontend.about')
                ->with('profile', $profile)
                ->with('about_me_pic', $about_me_pic->file)
                ->with('about_me_description', $about_me_pic->description);
    	}

        public function contact(){
        //On profile I need to be about to add email
        return view('frontend.contact');
    	
    }
    public function thanks(){
    	return view('frontend.thanks');
    }
    public function paintings(){
        //https://stackoverflow.com/a/13931676/2581266
        $paintings = Media::where('category', "=", 'Painting')->orderByRaw("RAND()")->get();
    	return view('frontend.paintings')->with('paintings', $paintings);
    }
    public function videos(){
        $videos = Media::where('category', "=", 'Video')->orderBy('created_at', 'desc')->get();
        return view('frontend.videos')->with('videos', $videos);
    }
    public function pictures(){
        $pictures = Media::where('category', "=", 'Picture')->limit(5)->orderBy('created_at', 'desc')->get();
        return view('frontend.pictures')->with('pictures', $pictures);
    }
    public function archive(){
    	return view('frontend.archive');
    }
    public function dashboard(){
        return view('frontend.dashboard');
        
    }
    public function vid(){
        return view('frontend.vid1');
        
    }
}
