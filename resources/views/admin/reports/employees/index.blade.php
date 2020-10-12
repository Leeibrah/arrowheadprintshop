@extends('admin.layout')


@section('css')

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

  
  <!-- <script src="/assets/bootstrap/css/bootstrap.css"></script> -->
  <!-- <link href="/assets/datepicker/datepicker.css" rel="stylesheet"> -->
  <link href="/assets/pickadate/themes/classic.date.css" rel="stylesheet">
@endsection


@section('content')
  
  <div class="container-fluid">
    <div class="row page-title-row">
      <div class="col-md-6">
        <h3>Employees <small>&raquo; Reports</small></h3>
      </div>
      <!-- <div class="col-sm-6 text-right">
        <a href="/admin/employee/create" class="btn btn-success btn-sm">
          <i class="fa fa-plus-circle"></i> New Employee
        </a>
      </div> -->
    </div>

  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="col-md-12"> <h4 class="title"> Apply Filters </h4> </div>
          <div class="box-body">
            <div class="form col-md-12">
              
              <form class="" method="POST" action="{!! route('admin.reports.employees') !!}" value="{{ csrf_token() }}">
                                  
              {!! csrf_field() !!}
               
              <div class="form-group">
                <div class="col-md-6">
                  <label> Start Date </label>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                      <input type="text" name="start_date" class="form-control" id="start_date_datepicker" required>
                  </div>
                </div>
              
                <div class="col-md-6">
                    <label> End Date </label>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" name="end_date" class="form-control" id="end_date_datepicker" required>
                    </div>
                </div>
              </div>
              
              <div class="col-md-12 form-group btn-padding">
                <div class="input-group pull-right">
                   <button type="submit" class="btn btn-primary"> <i class="fa fa-filter"></i> Filter Report </button>
                </div>
              </div>
              
             </form>
               
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-12">
          <div class="box box-primary">
          
          <div class="col-md-8"> <h4 class="title"> {{ $page_description }} </h4> </div>
          
          @if($curated)
          
          <form class="" method="POST" action="{!! route('admin.reports.employees') !!}" value="{{ csrf_token() }}">
           
            {!! csrf_field() !!}
          
            <input type="hidden" name="start_date" value="{{ $start_date }}">
           
            <input type="hidden" name="end_date" value="{{ $end_date }}">
           
            <input type="hidden" name="download" value="1">
           
            <div class="col-md-4 btn-padding">
              <button class="btn btn-primary btn-xs pull-right"> <i class="fa fa-download"></i> Download Csv </button>
            </div>
           
          </form>
          
          @endif
          
          <div class="clearfix"></div>
          <!-- Box -->
          <div class="box-body">

                  <div class="table-responsive">
                      <table id="employees-table" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>
                                    ID
                                  </th>
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
                                  
                              </tr>
                          </thead>
                       
                          <tbody>
                              @foreach($employees as $employee)
                                  <tr>
                                      <td>{{ $employee->id }}</td>
                                      <td>{{ $employee->created_at }}</td>
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
                                      
                                      
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                      <div class="pull-right padding">
                          {!! $employees->render() !!}
                      </div>
                  </div> <!-- table-responsive -->

              </div><!-- /.box-body -->
          </div>
      </div><!-- /.col -->

  </div><!-- /.row -->

@endsection


@section('scripts')
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/1.9.6/jquery.pjax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/riot/2.2.4/riot+compiler.min.js"></script>

    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/datepicker/datepicker.js"></script>

    <script language="JavaScript">
        function toggleCheckbox() {
            checkboxes = document.getElementsByName('chkrecipient[]');
            for(var i=0, n=checkboxes.length;i<n;i++) {
                checkboxes[i].checked = !checkboxes[i].checked;
            }
        }
    
        $(function () {
        $("#start_date_datepicker").datepicker({
                  dateFormat : "yy-mm-dd"
          });
        });
        $(function () {
        $("#end_date_datepicker").datepicker({
                  dateFormat : "yy-mm-dd"
          });
        });

    </script>

    <script>
      $(function() {
        $("#employees-table").DataTable({
        });
      });
    </script>

    <script>
      $(function() {
        $("#employees-table").DataTable({
          order: [[0, "desc"]]
        });
      });
    </script>

@endsection