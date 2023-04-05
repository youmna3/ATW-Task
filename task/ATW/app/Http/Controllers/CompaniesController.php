<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $companies = Company::paginate(10);
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(Company::$rules);
        $logoUrl = $request->file('logo')->store('companies', ['disk' => 'public']);
        $company = new Company;
        $company->fill($request->post());
        $company['logo'] = $logoUrl;
        $company->save();
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $company = Company::findOrFail($id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $company = Company::findOrFail($id);
        $request->validate(Company::$rules);
        $logoUrl = $request->file('logo')->store('companies', ['disk' => 'public']);
        $company->fill($request->post());
        $company['logo'] = $logoUrl;
        $company->save();
        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $company = Company::findOrFail($id);
        Company::destroy($id);
        return redirect()->route('companies.index')->with('success', 'Record has been deleted successfully!');
    }
}