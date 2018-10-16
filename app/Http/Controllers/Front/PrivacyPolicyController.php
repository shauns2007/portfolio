<?php

namespace Portfolio\Http\Controllers\Front;

use Illuminate\Http\Request;
use Portfolio\Http\Controllers\Controller;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        return view('privacy');
    }
}
