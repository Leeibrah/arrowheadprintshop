<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \SendGrid\Mail\Mail as Mail;

use Redirect;
use Setting;
use Flash;
use Input;

use App\Employee;

class EmployeeController extends Controller
{
    /**
     * Show the form
     *
     * @return View
     */
    public function index()
    {
        // return view('blog.contact');
    }

    /**
     * Email the contact request
     *
     * @return Redirect
     */
    public function enrollment()
    {
        $page_title = 'Employee Enrollment Page';
        $page_description = "This is the Employee Enrollment page";

        return view('pages.enroll-employee', compact('page_title', 'page_description'));
    }

    public function postEnrollment(Request $request)
    {


        $name = "N/A";

        $user = Employee::where('email', '=', $request['email'])->first();
        if ($user != null) {
           // user doesn't exist

            $error = 'Employee is already registered in our systems. If you did a mistake in your registration please reach us through email.';
            // return redirect()->back()->withErrors($error);
            return redirect()->back()->with('error', $error);
        }

        if ($request->has('name')) {
            $fromName = $request['name'];
        }
        if ($request->has('email')) {
            $fromEmail = $request['email'];
        }

        if ($request->has('sector')) {
            $theSector = $request['sector'];
        }

        if ($request->has('employer')) {
            $theEmployer = $request['employer'];
        }
       
        if ($request->has('salary')) {
            $theSalary = $request['salary'];
        }
        if ($request->has('amount')) {
            $theAmount = $request['amount'];
        }
        if ($request->has('ready')) {
            $theReady = $request['ready'];
        }
        if ($request->has('idnumber')) {
            $theIdnumber = $request['idnumber'];
        }
        if ($request->has('phone')) {
            $fromPhone = $request['phone'];
        }

        if (Input::hasFile('id_document')) {

            $destinationPath = public_path().'/uploads/document/id'; // upload path
            $extension = Input::file('id_document')->getClientOriginalExtension(); // getting id_document extension
            $idFileName = $fromName.'-ID-'.rand(111,999).'.'.$extension; // renaming id_document
            Input::file('id_document')->move($destinationPath, $idFileName); // uploading file to given path

        }else{

            $error = 'Please, Upload your ID Card and make sure it is smaller than 2MB or 2000KB';
            // return redirect()->back()->withErrors($error);
            return redirect()->back()->with('error', $error);
        }

        if (Input::hasFile('payslip_document')) {

            $destinationPath = public_path().'/uploads/document/payslip'; // upload path
            $extension = Input::file('payslip_document')->getClientOriginalExtension(); // getting payslip_document extension
            $payslipFileName = $fromName.'-Payslip-'.rand(111,999).'.'.$extension; // renaming payslip_document
            Input::file('payslip_document')->move($destinationPath, $payslipFileName); // uploading file to given path

        }
        else{

            $error = 'Please, Upload your Payslip';
            return redirect()->back()->with('error', $error);
        }

        $theSubject = "Salary Advance Registration : ".$fromName."";
        

        $toEmail = env('mail.system_receiver_email');
        // $toEmail = "leeibrah@gmail.com";

        $data = array('to' => $toEmail, 'from' => $fromEmail, 'phone'  => $fromPhone, 'name' => $fromName, 'subject' => $theSubject);

        $email = new \SendGrid\Mail\Mail();
        $email->setFrom($fromEmail, $fromName);
        $email->setSubject($theSubject);
        $email->addTo($toEmail, "SaloHub Info");
        $email->addContent(
            "text/html", "
            <p>Hi Salohub,</p>
            <p>
                Please find my answers to the registration form.
            </p>
            <p>
            Name: ".$fromName.
            "</p>
            <p>
            Email address: ".$fromEmail.
            "</p>
            <p>
            Which Sector are you currently working in?: ".$theSector.
            "</p>
            <p>
            Name of Employer?: ".$theEmployer.
            "</p>
            <p>
            Are you a Salaried Employee with Payslip evidence?: ".$theSalary.
            "</p>
            <p>
            How much would you need monthly for your Salary advance?: ".$theAmount.
            "</p>
            <p>
            Is your organization ready to sign up for Salary advances: ".$theReady.
            "</p>
            <p>
            Kindy assist us with your ID number: ".$theIdnumber.
            "</p>
            <p>
            Kindly assist us with your number: ".$fromPhone.
            "</p>
            <p>
            Kind Regards,
            <br>
            "
            .$fromName.
            "
            <br>
            "
            .$fromPhone.
            ""

        );

        $employee = Employee::create([
                "name"      	=> $fromName,
                "email"     	=> $fromEmail,
                "phone"     	=> $fromPhone,
                "sector"    	=> $theSector,
                "employer"  	=> $theEmployer,
                "salary"    	=> $theSalary,
                "amount"    	=> $theAmount,
                "ready"     	=> $theReady,
                "id_number" 	=> $theIdnumber,
                "id_card_doc"	=> $idFileName,
                "pay_slip_doc"	=> $payslipFileName,
                'status'    	=> 'ACTIVE'
            ]);


        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";


            


        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
        
        // return redirect(route('contacts'))->with('message', 'Message send Successfully. We will get back to you. Thank You.');
        return Redirect::to('employee-enrollment')->with('success', 'Message send to '. $toEmail .' successfully. We will get back to you. Thank You.');
    }
}
