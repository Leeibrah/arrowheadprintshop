<?php namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Redirect;
use Setting;

use Flash;
use \SendGrid\Mail\Mail as Mail;

use App\Employee;
use App\Employer;

class HomeController extends Controller
{


    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Request $request)
    {

        $page_title = trans('general.text.welcome');
        $page_description = "This is the welcome page";

        // $request->flashExcept(['password', 'password_confirmation']);
        $request->session()->reflash();
        return view('welcome', compact('page_title', 'page_description'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome(Request $request)
    {
        $page_title = trans('general.text.welcome');
        $page_description = "This is the welcome page";

        //$request->flashExcept(['password', 'password_confirmation']);
        $request->session()->reflash();
        return view('welcome', compact('page_title', 'page_description'));
    }


    public function about()
    {
        $page_title = 'About Page';
        $page_description = "This is the about page";

        return view('pages.about', compact('page_title', 'page_description'));
    }

    public function howitworks()
    {
        $page_title = 'How It Works Page';
        $page_description = "This is the How It Works page";

        return view('pages.how-it-works', compact('page_title', 'page_description'));
    }

    public function app()
    {
        $page_title = 'App Page';
        $page_description = "This is the App page";

        return view('pages.app', compact('page_title', 'page_description'));
    }
    
    public function termsandconditions()
    {
        $page_title = 'Terms and Conditions Page';
        $page_description = "This is the Terms and Conditions page";

        return view('pages.terms', compact('page_title', 'page_description'));
    }

    
    public function privacypolicy()
    {
        $page_title = 'Privacy Policy Page';
        $page_description = "This is the Privacy Policy page";

        return view('pages.privacy', compact('page_title', 'page_description'));
    }

    public function employerEnrollment()
    {
        $page_title = 'Employee Enrollment Page';
        $page_description = "This is the Employee Enrollment page";

        return view('pages.enroll-employer', compact('page_title', 'page_description'));
    }

    public function postEmployerEnrollment(Request $request)
    {

        // dd($request);

        $name = "N/A";

        if ($request->has('name')) {
            $fromName = $request['name'];
        }
        if ($request->has('email')) {
            $fromEmail = $request['email'];
        }
        if ($request->has('phone')) {
            $fromPhone = $request['phone'];
        }
        if ($request->has('organization')) {
            $theOrganization = $request['organization'];
        }
        if ($request->has('sector')) {
            $theSector = $request['sector'];
        }
        if ($request->has('location')) {
            $theLocation = $request['location'];
        }
        if ($request->has('number')) {
            $theNumber = $request['number'];
        }
        
        $theSubject = "Employer Enrollment : ".$theOrganization."";
        

        $toEmail = env('mail.system_receiver_email');
        // $toEmail = "leeibrah@gmail.com";

        $data = array('name' => $fromName, 'to' => $toEmail, 'from' => $fromEmail, 'phone'  => $fromPhone, 'subject' => $theSubject);

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
            Which Sector is your organization working in??: ".$theSector.
            "</p>
            <p>
            Name of Organization?: ".$theOrganization.
            "</p>
            <p>
            Which Sector is your organization working in?: ".$theSector.
            "</p>
            <p>
            Where is your Organization located?: ".$theLocation.
            "</p>
            <p>
            Kindly select number of Employees: ".$theNumber.
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

        $employer = Employer::create([
                "name"          => $fromName,
                "email"         => $fromEmail,
                "phone"         => $fromPhone,
                "organization"  => $theOrganization,
                "sector"        => $theSector,
                "location"      => $theLocation,
                "number"        => $theNumber,
                'status'        => 'ACTIVE'
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
        
        return Redirect::to('employer-enrollment')->with('success', 'Message send to '. $toEmail .' successfully. We will get back to you. Thank You.');
    }

    public function employeeEnrollment()
    {
        $page_title = 'Employee Enrollment Page';
        $page_description = "This is the Employee Enrollment page";

        return view('pages.enroll-employee', compact('page_title', 'page_description'));
    }

    public function postEmployeeEnrollment(Request $request)
    {

        // dd($request);

        $name = "N/A";

        if ($request->has('name')) {
            $fromName = $request['name'];
        }
        if ($request->has('email')) {
            $fromEmail = $request['email'];
        }

        if ($request->has('sector')) {
            $theSector = $request['sector'];
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
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";


            $employee = Employee::create([
                "name"      => $fromName,
                "email"     => $fromEmail,
                "phone"     => $fromPhone,
                "sector"    => $theSector,
                "salary"    => $theSalary,
                "amount"    => $theAmount,
                "ready"     => $theReady,
                "id_number" => $theIdnumber,
                'status'    => 'ACTIVE'
            ]);


        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
        
        // return redirect(route('contacts'))->with('message', 'Message send Successfully. We will get back to you. Thank You.');
        return Redirect::to('employee-enrollment')->with('success', 'Message send to '. $toEmail .' successfully. We will get back to you. Thank You.');
    }

    public function contacts()
    {
        $page_title = 'Contacts Page';
        $page_description = "This is the contacts page";

        return view('pages.contacts', compact('page_title', 'page_description'));
    }

    public function postContacts(Request $request)
    {

        $name = "N/A";
        if ($request->has('name')) {
            $fromName = $request['name'];
        }
        if ($request->has('email')) {
            $fromEmail = $request['email'];
        }
        if ($request->has('phone')) {
            $fromPhone = $request['phone'];
        }
        if ($request->has('subject')) {
            $theSubject = $request['subject'];
        }
        if ($request->has('message')) {
            $theMessage = $request['message'];
        }

        $toEmail = env('mail.system_receiver_email');

        $data = array('to' => $toEmail, 'from' => $fromEmail, 'phone'  => $fromPhone, 'name' => $fromName, 'subject' => $theSubject, 'message' => $theMessage);

        $email = new \SendGrid\Mail\Mail();
        $email->setFrom($fromEmail, $fromName);
        $email->setSubject($theSubject);
        $email->addTo($toEmail, "SaloHub Info");
        $email->addContent(
            "text/html", "
            <p>Hi Salohub,</p>
            <p>"
            .$theMessage.
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
        return Redirect::to('contacts')->with('success', 'Message send to '. $toEmail .' successfully. We will get back to you. Thank You.');
    }

    public function mail(){

        $theSubject = "Sending with SendGrid API. Test. You Know.";

        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("leeibrah@gmail.com", "Lee Gmail");
        $email->setSubject("Sending with Twilio SendGrid is Fun");
        $email->addTo("admin@salohub.com", "Lee Ibrahim");
        $email->addContent(
            "text/html", "
            <p>Hi Salohub</p>
            <br>
            <p>"
            .$theSubject.
            ".</p>");
        
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        try {
            $response = $sendgrid->send($email);
            print $response->statusCode() . "\n";
            print_r($response->headers());
            print $response->body() . "\n";
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
    }

}