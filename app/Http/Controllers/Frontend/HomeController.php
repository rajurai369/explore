<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("view.frontend.index");
    }

    public function about(){
        return view("view.frontend.about");
    }

    public function contact(){
        return view("view.frontend.contact");
    }

    public function team_list(){
        return view("team.team_list");
    }

    public function service(){
        return view("view.frontend.service");
    }
}
