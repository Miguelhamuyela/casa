<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\LaceCar;
use Illuminate\Http\Request;

class LaceCarController extends Controller
{
    public function index()
    {
        $response['laceCars']= LaceCar::get();

       return view('site.laceCar.list.index',$response);
    }


    public function show($title)
    {
        $response['laceCar'] = LaceCar::where('name', urldecode($title))->first();

        return view('site.laceCar.details.index', $response);


    }

}
