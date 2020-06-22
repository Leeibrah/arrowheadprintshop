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
            <th class="hidden-sm">Name</th>
            <th class="hidden-md">Email</th>
            <th class="hidden-md">Phone</th>
            <th class="hidden-md">Organization</th>
            <th class="hidden-md">Sector</th>
            <th class="hidden-sm">Location</th>
            <th class="hidden-md">Number</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($employers as $employer)
            <tr>
              <td class="hidden-sm">{{ $employer->name }}</td>
              <td class="hidden-sm">{{ $employer->email }}</td>
              <td class="hidden-sm">{{ $employer->phone }}</td>
              <td class="hidden-md">{{ $employer->organization }}</td>
              <td class="hidden-md">{{ $employer->sector }}</td>
              <td class="hidden-md">{{ $employer->location }}</td>
              <td class="hidden-md">{{ $employer->number }}</td>
   
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