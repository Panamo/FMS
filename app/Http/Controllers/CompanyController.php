<?php

namespace FMS\Http\Controllers;

use Illuminate\Http\Request;

use FMS\Http\Requests;
use FMS\Company as Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('company.index')->with('companies', Company::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
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
            'name' => 'required|max:255',
            'type' => 'required|in:clone,register',
            'address' => 'required',
            'telephones' => 'required|array',
        ]);

        $company = Company::create([
            'name' => $request['name'],
            'type' => $request['type'],
            'address' => $request['address'],
            'phones' => $request['telephones']
        ]);

        return redirect()->route('company.show', [$company]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('company.show')->with('company', $company);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit')->with('company', $company);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'type' => 'required|in:clone,register',
            'address' => 'required',
            'telephones' => 'required|array',
        ]);

        $company->update([
            'name' => $request['name'],
            'type' => $request['type'],
            'address' => $request['address'],
            'phones' => $request['telephones']
        ]);

        return redirect()->route('company.show', [$company]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('company.index');
    }
}
