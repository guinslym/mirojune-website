<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    //
    public function create()
    {
        return view('frontend.contact');
    }

  public function store(ContactFormRequest $request)
  {

    return Redirect::route('contact')
      ->with('message', 'Thanks for contacting us!');

  }
}
