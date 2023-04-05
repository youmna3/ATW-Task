<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = Employee::paginate(10);
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $companies = Company::all();
        return view('employees.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(Employee::$rules);
        $employee = new Employee;
        $employee->fill($request->post());
        $employee->save();
        return redirect()->route('employees.index');

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
        $companies = Company::all();
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee', 'companies'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $employee = Employee::findOrFail($id);
        $request->validate(Employee::$rules);
        $employee->fill($request->post());
        $employee->save();
        return redirect()->route('employees.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Employee::destroy($id);
        return redirect()->route('employees.index')->with('success', 'Record has been deleted successfully!');
    }
}