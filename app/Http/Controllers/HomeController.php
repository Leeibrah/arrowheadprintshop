<?php namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Redirect;
use Setting;

use Flash;
use Mail;
// use \SendGrid\Mail\Mail as Mail;

use App\Post;
use App\Employer;

class HomeController extends Controller
{


    /**
     * Retrieves the view for the index page of the 
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(){

        $page_title = "Home";
        $page_description = "This is the Home page";
        
        // return view('index', compact('page_title', 'page_description'));
        return view('welcome', compact('page_title', 'page_description'));
    }

    public function about(){

        $page_title = 'About Us';
        $page_description = "This is the about us page";

        return view('pages.about', compact('page_title', 'page_description'));
    }

    public function gallery(){

        $page_title = 'Gallery Page';
        $page_description = "This is the gallery us page";

        return view('pages.gallery', compact('page_title', 'page_description'));
    }

    public function contacts(){

        $page_title = 'Contact Us';
        $page_description = "This is the contact us page";

        return view('pages.contacts', compact('page_title', 'page_description'));
    }

    public function postContacts(Request $request)
    {

        $page_title = 'success Page';
        $page_description = "This is the success page";
        $message = "Message send Successfully. We will get back to you. Thank You.";

        // dd($request);

        if($request['answer'] === '99'){
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

            $data = array('email' => $fromEmail, 'phone'  => $fromPhone, 'name' => $fromName, 'subject' => $theSubject, 'linemessage' => $theMessage);

            // try {
            //     print $response->statusCode() . "\n";
            //     print_r($response->headers());
            //     print $response->body() . "\n";
            // } catch (Exception $e) {
            //     echo 'Caught exception: '. $e->getMessage() ."\n";
            // }


            Mail::send('emails.contact', $data, function($message) use ($data) {
                $message->to('info@mdigital.co.ke');
                $message->subject($data['subject']);
            });
            
            // return redirect(route('success'));
            return view('contact', compact('page_title', 'page_description', 'message'));

        }else{
            // return view('pages.notification', ['message' => 'Error: Please go back and fill in the correct answer to the captcha question. Thank You.']);
            return redirect(route('contact'))->with('message', 'Message not send.  ');

            // return view('contact', compact('page_title', 'page_description', 'message'));
        }
        
    }


    public function mail(){

        $data = ['testVar' => 'lee'];

       Mail::send('emails.test', $data, function($message) use ($data) {
            $message->to('info@mdigital.co.ke');
            $message->subject('Medixa Digital');
        });


        dd('Mail Send Successfully');
    }

}