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
        <h3>Employers <small>&raquo; Reports</small></h3>
      </div>
      <!-- <div class="col-sm-6 text-right">
        <a href="/admin/employer/create" class="btn btn-success btn-sm">
          <i class="fa fa-plus-circle"></i> New Employer
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
              
              <form class="" method="POST" action="{!! route('admin.reports.employers') !!}" value="{{ csrf_token() }}">
                                  
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
          
          <form class="" method="POST" action="{!! route('admin.reports.employers') !!}" value="{{ csrf_token() }}">
           
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
                      <table id="employers-table" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                  <th>
                                    ID
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
                                    Organization
                                  </th>
                                  <th>
                                    Sector
                                  </th>
                                  <th>
                                    Location
                                  </th>
                                  <th>
                                    Number
                                  </th>
                                  <th>
                                    Status
                                  </th>
                                  <th>
                                    Joined
                                  </th>
                              </tr>
                          </thead>
                       
                          <tbody>
                              @foreach($employers as $employer)
                                  <tr>
                                      <td>{{ $employer->id }}</td>
                                      <td>{{ $employer->name }}</td>
                                      <td>{{ $employer->email }}</td>
                                      <td>{{ $employer->phone }}</td>
                                      <td>{{ $employer->organization }}</td>
                                      <td>{{ $employer->sector }}</td>
                                      
                                      <td>{{ $employer->location }}</td>

                                      <td>{{ $employer->number }}</td>
                                
                                      <td>{{ $employer->status }}</td>
                                      <td>{{ $employer->created_at }}</td>
                                      
                                  </tr>
                              @endforeach
                          </tbody>
                      </table>
                      <div class="pull-right padding">
                          {!! $employers->render() !!}
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
        $("#employers-table").DataTable({
        });
      });
    </script>

    <script>
      $(function() {
        $("#employers-table").DataTable({
          order: [[0, "desc"]]
        });
      });
    </script>

@endsection