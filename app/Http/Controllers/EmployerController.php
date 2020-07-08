<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \SendGrid\Mail\Mail as Mail;

use Redirect;
use Setting;
use Flash;
use Input;

use App\Employer;

class EmployerController extends Controller
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
        $page_title = 'Employer Enrollment Page';
        $page_description = "This is the Employer Enrollment page";

        return view('pages.enroll-employer', compact('page_title', 'page_description'));
    }

    public function postEnrollment(Request $request)
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
            
            if ($request['number'] == 'None') {
                return Redirect::to('employer-enrollment')->with('error', 'Please fill in all the form details. Thank You.');
            }else{
                $theNumber = $request['number'];
            }
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
}
