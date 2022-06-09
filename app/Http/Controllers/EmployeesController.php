<?php

namespace App\Http\Controllers;

use App\Models\Companies;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees=Employees::all();

        return view('Employees.index')->with(compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $companies=Companies::all();
        return view('Employees.create')->with(compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'firstName' => 'required|',
            'lastName' => 'required|',
            'email' => 'required|',
            'companyId' => 'required|',
            'phone' => 'required|',
        ]);
//        dd($request->input());
        $employee=new Employees();
        $employee->first_name=$request->firstName;
        $employee->last_name=$request->lastName;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->company_id=$request->companyId;
        $employee->save();
        return redirect('employee')->with('message','Employee Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee=Employees::find($id);
        $companies=Companies::all();

        return view('Employees.edit')->with(compact('employee','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'firstName' => 'required|',
            'lastName' => 'required|',
            'email' => 'required|',
            'companyId' => 'required|',
            'phone' => 'required|',
        ]);
//        dd($request->input());
        $employee=Employees::find($id);
        $employee->first_name=$request->firstName;
        $employee->last_name=$request->lastName;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->company_id=$request->companyId;
        $employee->save();
        return redirect('employee')->with('message','Employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee=Employees::find($id);
        $employee->delete();
        return redirect()->back()->with('message','Employee Deleted Successfully');
    }
}
