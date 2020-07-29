@extends('admin.layout')

@section('content')
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-6">
        <h3>Employers <small>&raquo; Listing</small></h3>
      </div>
      <!-- <div class="col-md-6 text-right">
        <a href="/admin/employer/create" class="btn btn-success btn-md">
          <i class="fa fa-plus-circle"></i> New Employer
        </a>
      </div> -->
    </div>

    <div class="row">
      <div class="col-sm-12">

        @include('admin.partials.errors')
        @include('admin.partials.success')

        <table id="employers-table" class="table table-striped table-bordered">
          <thead>
          <tr>
            <th>Created Date</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Organization</th>
            <th>Sector</th>
            <th>Location</th>
            <th>Number</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($employers as $employer)
            <tr>
              <td>{{ $employer->created_at->todatestring() }}</td>
              <td>{{ $employer->name }}</td>
              <td>{{ $employer->email }}</td>
              <td>{{ $employer->phone }}</td>
              <td>{{ $employer->organization }}</td>
              <td>{{ $employer->sector }}</td>
              <td>{{ $employer->location }}</td>
              <td>{{ $employer->number }}</td>
   
              <!-- <td>
                <a href="/admin/employer/{{ $employer->id }}/edit"
                   class="btn btn-xs btn-info">
                  <i class="fa fa-edit"></i> Edit
                </a>
              </td> -->
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
      $("#employers-table").DataTable({
      });
    });
  </script>
@stop