<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate(10);

        return view('index') 
                -> with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'joining_date' => 'required|date',
            'salary' => 'required|numeric',
            'email' => 'required|email|unique:employees,email',
            'mobile_no' => 'required|max:20',
            'address' => 'required|string|max:255',
        ]);

        $employee = Employee::create($request->all());
        $employee->save();

        return redirect() -> route('employees.show', $employee->id);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $employee= Employee::find($id);

        return view('show') 
                -> with('employee', $employee);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {   
        $employee = Employee::find($id);
        $employee->delete();

        return redirect() -> route('employees.index');
    }
}
