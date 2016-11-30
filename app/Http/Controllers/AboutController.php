<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller {

    public function create()
    {
        return view('welcome');
    }

  public function store(ContactFormRequest $request)
  {

    return \Redirect::route('contact')
      ->with('message', 'Thanks for contacting us!');

  }

}