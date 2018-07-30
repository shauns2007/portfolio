<?php

namespace Portfolio\Http\Controllers\Front;

use Mail;
use Illuminate\Http\Request;
use Portfolio\Mail\ContactMe;
use Portfolio\Http\Requests\ContactMeRequest;
use Portfolio\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function create(ContactMeRequest $request)
    {
        Mail::to('shaunsparg85dev@gmail.com')->send(new ContactMe((object) $request->all()));
        $html = view('modals.success')->render();
        return response()->json(['success'=>1, 'html'=>$html]);
    }
}
