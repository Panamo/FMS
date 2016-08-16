<?php

namespace FMS\Http\Controllers;

use Illuminate\Http\Request;

use FMS\Http\Requests;
use FMS\Vhip as Vhip;
use FMS\Company as Company;

class VhipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("vhip.index")->with("vhips", Vhip::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("vhip.create")->with("companies", Company::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'letter_code' => 'required|string',
            'submit_date' => 'required|date',
            'expire_date' => 'required|date',
            'total_amount' => 'required|numeric',
            'tracking_code' => 'required|string',
            'sub_companies' => 'required|array',
            'amounts' => 'required|array'
        ]);

        $companies = [];
        for ($i = 0; $i < sizeof($request['sub_companies']); $i++) {
            array_push(
                $companies,
                ['id' => $request['sub_companies'][$i],
                'amount' => $request['amounts'][$i],
                'name' => Company::find($request['sub_companies'][$i])['name']]
            );
        }

        $vhip = Vhip::create([
            'letter_code' => $request['letter_code'],
            'submit_date' => $request['submit_date'],
            'expire_date' => $request['expire_date'],
            'total_amount' => $request['total_amount'],
            'tracking_code' => $request['tracking_code'],
            'companies' => $companies
        ]);

        return redirect()->route('vhip.show', [$vhip]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vhip $vhip)
    {
        return view('vhip.show')->with('vhip', $vhip);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
