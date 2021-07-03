<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfoliosController extends Controller
{
    /**
     * Display site1 portfolio.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function site1(Request $request)
    {
        if (! $request->ajax()) return redirect('/#portfolio');

        return view('portfolios.site1');
    }
}
