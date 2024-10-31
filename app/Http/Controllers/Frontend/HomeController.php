<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Explore;
use App\Models\About;

use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index(){



      return view("frontend.index");
    }

    public function about(){



        return view("frontend.about");
    }

    public function contact(){


        return view("frontend.contact");
    }



    public function service(){


        return view("frontend.service");
    }

    public function team_list(){
        return view("frontend.team.team_list");
    }

    public function error(){
        return view("frontend.error");
    }

    public function booking(){
        return view("frontend.bookings.booking");
    }

    public function destination(){
        return view("frontend.destination.destination");
    }

    public function testimonial(){
        return view("frontend.testimonial");
    }



    public function pakage_detail(){
        return view("frontend.pakages.pakage");
    }
}
