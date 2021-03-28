<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactRequest;

class ContactPageController extends Controller
{
    public function index() {
      return view('pages.contact');
    }

    public function submit_contact_form(ContactRequest $request) {
      return $request;
    }
}
