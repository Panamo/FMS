<?php

namespace FMS\Http\Controllers;

use Illuminate\Http\Request;

use FMS\Http\Requests;

use FMS\Company;

class SearchController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $q = $request['q'];
        $companies = Company::where('name', 'LIKE', "%$q%");
        return view('search')->with('companies', $companies);
    }
}
