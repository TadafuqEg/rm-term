<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Image;
use Str;
use File;

class WebsiteController extends ApiController
{
    public function index(){
      
        return view('home');

    }

    public function market_share(){
       
        return view('market_share');

    }
    public function executive_summary(){
       
        return view('executive_summary');

    }
    public function market_analysis(){
       
        return view('market_analysis');

    }
    public function competitor_analysis(){
       
        return view('competitor_analysis');

    }
    public function growth_strategies(){
       
        return view('growth_strategies');

    }
    public function about(){
       
        return view('about');

    }

   

}