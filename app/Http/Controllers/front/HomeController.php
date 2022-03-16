<?php

namespace App\Http\Controllers\front;
use App\Service;
use App\Contact;
use App\Media;
use App\Faq;
use App\Blog;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function manageabout(){
        $profiles=Profile::all()->take(1);
        return view('front.pages.about',compact('profiles'));
    }
}
