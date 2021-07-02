<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $birthdate    = Carbon::parse('14th August 1996');
        $current_date = Carbon::now();
        $data['age']  = $current_date->diffInYears($birthdate);
        $data['year'] = $current_date->year;

        return view('index', $data);
    }

    /**
     * Forward submitted message to site admin.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        //
    }
}
