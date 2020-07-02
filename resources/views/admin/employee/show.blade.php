@extends('admin.layout')

@section('content')
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-12">
        <h3>Employees <small>&raquo; Show employee</small></h3>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
	    <div class="panel panel-default">
	          <div class="panel-heading">
	            <h3 class="panel-title">Employee Details</h3>
	          </div>
	          <div class="panel-body">

	            @include('admin.partials.errors')
	            @include('admin.partials.success')

		        <div class="form-horizontal">

		              <div class="form-group">
		                <label for="employee" class="col-md-3 control-label">Name :</label>
		                <div class="col-md-3">
		                  <p class="form-control-static">{{ $employee->name }}</p>
		                </div>
		              </div>

		              	<div class="form-group">
						  <label for="title" class="col-md-3 control-label">
						    Email
						  </label>
						  <div class="col-md-8">
						   	<p class="form-control-static">{{ $employee->email }}</p>
						  </div>
						</div>

						<div class="form-group">
						  <label for="subtitle" class="col-md-3 control-label">
						    Phone
						  </label>
						  <div class="col-md-8">
						    <p class="form-control-static">{{ $employee->phone }}</p>
						  </div>
						</div>

						<div class="form-group">
						  <label for="meta_description" class="col-md-3 control-label">
						    Sector
						  </label>
						  <div class="col-md-8">
						    <p class="form-control-static">{{ $employee->sector }}</p>
						  </div>
						</div>

						<div class="form-group">
						  <label for="meta_description" class="col-md-3 control-label">
						    Employer
						  </label>
						  <div class="col-md-8">
						    <p class="form-control-static">{{ $employee->employer }}</p>
						  </div>
						</div>

						<div class="form-group">
						  <label for="meta_description" class="col-md-3 control-label">
						    Salary
						  </label>
						  <div class="col-md-8">
						    <p class="form-control-static">{{ $employee->salary }}</p>
						  </div>
						</div>

						<div class="form-group">
						  <label for="meta_description" class="col-md-3 control-label">
						    Amount
						  </label>
						  <div class="col-md-8">
						    <p class="form-control-static">{{ $employee->amount }}</p>
						  </div>
						</div>

						<div class="form-group">
						  <label for="meta_description" class="col-md-3 control-label">
						    ID Number
						  </label>
						  <div class="col-md-8">
						    <p class="form-control-static">{{ $employee->id_number }}</p>
						  </div>
						</div>

						<div class="form-group">
						  <label for="meta_description" class="col-md-3 control-label">
						    ID Document
						  </label>
						  <div class="col-md-8">
						    <p class="form-control-static">{{ $employee->id_card_doc }}</p>
						  </div>
						</div>

						<div class="form-group">
						  <label for="meta_description" class="col-md-3 control-label">
						    Payslip Document
						  </label>
						  <div class="col-md-8">
						    <p class="form-control-static">{{ $employee->pay_slip_doc }}</p>
						  </div>
						</div>
		        </div>

	          </div>

          	
        </div>

        <div class="panel panel-default">
	        <div class="panel-heading">
	            <h3 class="panel-title">Employee ID Card Document</h3>
	        </div>
	        <div class="panel-body">

	          	<div class="form-horizontal">
	          		<!-- <img src="/uploads/document/id/{{ $employee->id_card_doc }}"> -->
	          		<!-- <a href="/uploads/document/id/{{ $employee->id_card_doc }}">{{ $employee->id_card_doc }}</a> -->
	          		<iframe src="/uploads/document/id/{{ $employee->id_card_doc }}" style="width: 100%;height: 500px; border: none;"></iframe>
		        </div>
	        </div>
        </div>

        <div class="panel panel-default">
	        <div class="panel-heading">
	            <h3 class="panel-title">Employee Payslip Document</h3>
	        </div>
	        <div class="panel-body">

	          	<div class="form-horizontal">
	          		<iframe src="/uploads/document/payslip/{{ $employee->pay_slip_doc }}" style="width: 100%;height: 500px; border: none;"></iframe>
		        </div>
	        </div>
        </div>

        <!-- <div class="form-group">
            <div class="col-md-7 col-md-offset-3">
              <button type="submit" class="btn btn-primary btn-md">
                <i class="fa fa-save"></i>
                &nbsp; Save Changes
              </button>
            </div>
        </div> -->
    </div>
  </div>

@stop