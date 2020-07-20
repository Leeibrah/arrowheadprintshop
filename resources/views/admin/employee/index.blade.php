@extends('admin.layout')

@section('content')
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-6">
        <h3>Employees <small>&raquo; Listing</small></h3>
      </div>
      <!-- <div class="col-sm-6 text-right">
        <a href="/admin/employee/create" class="btn btn-success btn-sm">
          <i class="fa fa-plus-circle"></i> New Employee
        </a>
      </div> -->
    </div>

    <div class="row">
      <div class="col-sm-12">

        @include('admin.partials.errors')
        @include('admin.partials.success')

        <table id="employees-table" class="table table-striped table-bordered">
          <thead>
          <tr>
            <th class="hidden-sm">Joined</th>
            <th class="hidden-sm">Name</th>
            <th class="hidden-sm">Email</th>
            <th class="hidden-sm">Phone</th>
            <th class="hidden-sm">Sector</th>
            <th class="hidden-sm">Employer</th>
            <th class="hidden-sm">Salary</th>
            <th class="hidden-sm">Amount</th>
            <th class="hidden-sm">Organization Ready</th>
            <th class="hidden-sm">ID Number</th>
            <th class="hidden-sm">ID Card Document</th>
            <th class="hidden-sm">Payslip Document</th>
            
            <th data-sortable="false">Actions</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($employees as $employee)
            <tr>
              <td class="hidden-sm">{{ $employee->created_at->todatestring() }}</td>
              <td class="hidden-sm">{{ $employee->name }}</td>
              <td class="hidden-sm">{{ $employee->email }}</td>
              <td class="hidden-sm">{{ $employee->phone }}</td>
              <td class="hidden-sm">{{ $employee->sector }}</td>
              <td class="hidden-sm">{{ $employee->employer }}</td>
              <td class="hidden-sm">{{ $employee->salary }}</td>
              <td class="hidden-sm">{{ $employee->amount }}</td>
              <td class="hidden-sm">{{ $employee->ready }}</td>
              <td class="hidden-sm">{{ $employee->id_number }}</td>
              <td class="hidden-sm">{{ $employee->id_card_doc }}</td>
              <td class="hidden-sm">{{ $employee->pay_slip_doc }}</td>
              <td>
                <a href="/admin/employee/{{ $employee->id }}" class="btn btn-xs btn-warning">
                    <i class="fa fa-eye"></i> View
                </a>
              <td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@stop

@section('scripts')
  <script>
    $(function() {
      $("#employees-table").DataTable({
      });
    });
  </script>
@stop