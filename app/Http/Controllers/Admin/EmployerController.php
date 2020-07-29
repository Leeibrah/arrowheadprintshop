<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\EmployerFormFields;
use App\Http\Requests;
use App\Http\Requests\EmployerCreateRequest;
use App\Http\Requests\EmployerUpdateRequest;
use App\Http\Controllers\Controller;
use App\Employer;

class EmployerController extends Controller
{
    /**
     * Display a listing of the Employers.
     */
    public function index()
    {
        $employers = Employer::orderBy('id', 'DESC')->get();

        // dd($employers);

        return view('admin.employer.index', compact('employers'));
    }

    /**
     * Show the new Employer form
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created Employer
     *
     * @param EmployerCreateRequest $request
     */
    public function store(EmployerCreateRequest $request)
    {
        
    }

    /**
     * Show the Employer edit form
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the Employer
     *
     * @param EmployerUpdateRequest $request
     * @param int  $id
     */
    public function update(EmployerUpdateRequest $request, $id)
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