<?php

namespace App\Http\Controllers;

use App\Models\PortalAboutUsSection;
use App\Models\PortalBlogCategory;
use App\Models\PortalBlogPosts;
use App\Models\PortalContactUsInfo;
use App\Models\PortalDepartment;
use App\Models\PortalDoctors;
use App\Models\PortalHomePageSlider;
use App\Models\PortalInsurance;
use App\Models\PortalMessages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function test(){
//        Auth::logout();
//        dd(Auth::user());
        $x = Auth::attempt(['email' => 'eng.mina23@gmail.com' , 'password' => '123123']);
//        return view('welcome');
//        dd(Auth::user());
        return Redirect::to('/mina');
    }

    public function test1()
    {
        dd(Auth::user());
    }

//
}
