<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;
use Illuminate\Support\Facades\Hash;

class OkgController extends Controller
{
    public function Index(){
        return view('frontend.index');
    }

    public function About(){
        return view('frontend.about.about-area');
    }

    public function FAQ(){
        return view('frontend.FAQ.FAQ-area');
    }

    public function TNC(){
        return view('frontend.TNC.TNC-area');
    }

    public function PrivacyPolicy(){
        return view('frontend.Privacy.Privacy-area');
    }
    
}
