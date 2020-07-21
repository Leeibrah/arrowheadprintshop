@extends('admin.layout')

@section('content')
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-6">
        <h3>employees <small>&raquo; Listing</small></h3>
      </div>
  
    </div>

    <div class="row">
      <div class="col-sm-12">

        @include('admin.partials.errors')
        @include('admin.partials.success')

        <table id="employees-table" class="table table-striped table-bordered">
          <thead>
            <tr>
                <th>
                  Joined
                </th>
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                  Phone
                </th>
                <th>
                  Sector
                </th>
                <th>
                  Employer
                </th>
                <th>
                  Salary
                </th>
                <th>
                  Amount
                </th>
                <th>
                  Organization Ready
                </th>
                <th>
                  ID Number
                </th>
                <th>
                  ID Card Document
                </th>
                <th>
                  Payslip Document
                </th>
                <th>
                  Status
                </th>
                
                <th data-sortable="false">
                   Action
                </th>
            </tr>
          </thead>
          <tbody>
          @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->created_at->format('d/m/Y') }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>

                <td>{{ $employee->sector }}</td>
                <td>{{ $employee->employer }}</td>
                <td>{{ $employee->salary }}</td>

                <td>{{ $employee->amount }}</td>
                <td>{{ $employee->ready }}</td>
                <td>{{ $employee->id_number }}</td>

                <td>{{ $employee->id_card_doc }}</td>
                <td>{{ $employee->pay_slip_doc }}</td>
                <td>{{ $employee->status }}</td>
                <td>
                  <a href="/admin/employee/{{ $employee->id }}" class="btn btn-xs btn-warning">
                      <i class="fa fa-eye"></i> View
                  </a>
                </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@stop

@section('scripts')
  
@stop