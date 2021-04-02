<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests\ContactRequest;

class ContactPageController extends Controller
{
    public function index() {

      return view('pages.contact');
    }

    public function submit_contact_form(ContactRequest $request) {

      $data = $request->all();

      Mail::to('artur.anissimov@gmail.com')->send(new ContactFormMail($data));

      return redirect()->route('contact_page')->with('success', __('contact-page.message_successfully_sended'));

    }
}
