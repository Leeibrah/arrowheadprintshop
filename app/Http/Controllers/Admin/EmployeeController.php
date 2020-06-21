<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\EmployeeFormFields;
use App\Http\Requests;
use App\Http\Requests\EmployeeCreateRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Http\Controllers\Controller;
use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the Employees.
     */
    public function index()
    {
        $employees = Employee::all();

        // dd($employees);

        return view('admin.employee.index', compact('employees'));
    }

    /**
     * Show the new Employee form
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created Employee
     *
     * @param EmployeeCreateRequest $request
     */
    public function store(EmployeeCreateRequest $request)
    {
        
    }

    /**
     * Show the Employee edit form
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the Employee
     *
     * @param EmployeeUpdateRequest $request
     * @param int  $id
     */
    public function update(EmployeeUpdateRequest $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        
    }
}