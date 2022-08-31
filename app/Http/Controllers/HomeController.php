<?php namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Request $request)
    {

        $page_title = 'Medixa Digital :: Digital Marketing Agency';
        $page_description = "Medixa Digital Marketing Agency, Design, Web Design, Web Development, Social Media Marketing, Customer Acquisition, Nairobi, Kenya, Africa";

        // $request->flashExcept(['password', 'password_confirmation']);
        $request->session()->reflash();
        $posts = Post::orderBy('id', 'desc')->take(3)->get();


        return view('welcome', compact('page_title', 'page_description', 'posts'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome(Request $request)
    {
        $page_title = 'Digital Marketing Agency';
        $page_description = "Medixa Digital Marketing Agency, Design, Web Design, Web Development, Social Media Marketing, Customer Acquisition, Nairobi, Kenya, Africa";

        //$request->flashExcept(['password', 'password_confirmation']);
        $request->session()->reflash();
        return view('welcome', compact('page_title', 'page_description', 'posts'));
    }


    public function about()
    {

        $page_title = 'About Us';
        $page_description = "Medixa Digital Marketing Agency About Us";

        return view('pages.about', compact('page_title', 'page_description'));
    }

    public function team()
    {

        $page_title = 'Team Page';
        $page_description = "This is the team page";

        return view('pages.team', compact('page_title', 'page_description'));
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
        $page_title = 'Terms and Conditions';
        $page_description = "This is the Terms and Conditions page";

        return view('pages.terms', compact('page_title', 'page_description'));
    }

    
    public function privacypolicy()
    {
        $page_title = 'Privacy Policy';
        $page_description = "This is the Privacy Policy page";

        return view('pages.privacy', compact('page_title', 'page_description'));
    }

    public function enroll()
    {
        $page_title = 'Enroll Page';
        $page_description = "This is the Enroll page";

        return view('pages.enroll', compact('page_title', 'page_description'));
    }
    

    public function contacts()
    {
        $page_title = 'Contacts Us';
        $page_description = "This is the contacts page";

        return view('pages.contacts', compact('page_title', 'page_description'));
    }

    public function notification()
    {
        $page_title = 'success Page';
        $page_description = "This is the success page";

        return view('pages.notification', compact('page_title', 'page_description'));
    }

    public function postContacts(Request $request)
    {

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
                $message->to('info@tillage.co.ke');
                $message->subject($data['subject']);
            });

            
            // return redirect(route('success'));
            return view('pages.notification', ['message' => 'Message send Successfully. We will get back to you. Thank You.']);

        }else{
            return view('pages.notification', ['message' => 'Error: Please go back and fill in the correct answer to the captcha question. Thank You.']);
            // return redirect(route('notification'))->with('message', 'Message not send.  ');
        }
        
    }

    public function mail(){

        $data = ['testVar' => 'lee'];

       Mail::send('emails.test', $data, function($message) use ($data) {
            $message->to('info@tillage.co.ke');
            $message->subject('E-Mail Example');
        });


        dd('Mail Send Successfully');
    }

}