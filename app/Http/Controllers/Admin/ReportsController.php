<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Redirect;
use Setting;
use Exception;


use App\Employee;

use App\User;

use Auth;
use Flash;

class ReportsController extends Controller {

  // Users Reports
  public function getEmployees(){

    $page_title = trans('admin/reports/general.page.employees.title');
    $page_description = trans('admin/reports/general.page.employees.description');
    
    $start_date = date("Y-m-d", strtotime(request()->input("start_date")));
    $end_date = date("Y-m-d", strtotime(request()->input("end_date")));
    
    $employees = Employee::paginate(10);

    // dd($employees);
    
    $curated = false;
    
    $employeeCount =  Employee::count();

    if (session()->has('message')){

      Session::flash('noResults', 'Sorry, we found 0 results');
    }

    // dd($Employees);


    return view('admin.reports.employees.index', compact('curated', 'start_date', 'end_date', 'employees', 'employeeCount', 'page_title', 'page_description'));
  }

  public function postEmployees() {
    
    $start_date = date("Y-m-d", strtotime(request()->input("start_date")));
    $end_date = date("Y-m-d", strtotime(request()->input("end_date")));

    $page_title = "Employees Reports";
    $page_description = "Showing reports for: $start_date to $end_date" ;

    $download = request()->input("download");
    
    $curated = true;
    
    $employees = Employee::where("created_at", ">=",$start_date)->where("created_at", "<=", $end_date)->paginate(100);

    $employeeCount =  Employee::where("created_at", ">=",$start_date)->where("created_at", "<=", $end_date)->count();

    if (session()->has('message')){
      Session::flash('noResults', 'Sorry, we found 0 results');
    }

    if($download){
      @header("Content-disposition: attachment; filename=Employees-Report.csv");
      @header("Content-type: application/octetstream");
      ini_set('memory_limit', '128M');
      
      print trans('admin/reports/general.page.Employees.post-description', ['from' => $start_date, 'to' => $end_date]);
      print "\n";
      
      print "Name, Email, Phone, Sector, Employer, Salary, Amount, Organization Ready, ID Number, ID Document, Payslip Document, Status, Joined \n";
      
      foreach ($employees as $key => $employee) {
        
        print $employee->name . ',';
        print $employee->email . ',';
        print $employee->phone . ',';
        print $employee->sector . ',';
        print $employee->employer . ',';
        print $employee->salary . ',';
        print $employee->amount . ',';
        print $employee->ready . ',';
        print $employee->id_number . ',';
        print $employee->id_card_doc . ',';
        print $employee->pay_slip_doc . ',';
        print $employee->status . ',';
        print $employee->created_at . ',';
        print "\n";
        
      }
      exit();
      
    } else{
       return view('admin.reports.employees.index', compact('curated','start_date', 'end_date', 'employees', 'orderCount', 'page_title', 'page_description'));
    }
 }
  
}
