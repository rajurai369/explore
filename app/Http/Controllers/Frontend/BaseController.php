<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Explore;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct() {
     $about=About::first();
     $explore=Explore::first();
     $services=Service::all();
     View::share([
        'about'=>$about,
        'explore'=>$explore,
        'services'=>$services


     ]);




    }
}
