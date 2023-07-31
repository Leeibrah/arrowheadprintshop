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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Request $request)
    {

        $page_title = 'MDigital';
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
        $page_title = 'MDigital';
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

    public function work()
    {

        $page_title = 'Our Case Studies';
        $page_description = "This is the work page";

        return view('pages.work', compact('page_title', 'page_description'));
    }

    public function all()
    {

        $page_title = 'All our work';
        $page_description = "This is the all works page";

        return view('pages.all', compact('page_title', 'page_description'));
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
    

    

    public function portfolio()
    {
        $file = public_path().DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'portfolio'.DIRECTORY_SEPARATOR.'medixa-portfolio.pdf';
        $file = File::get($file);
        $response = Response::make($file,200);
        $response->header('Content-Type', 'application/pdf');
        return $response;
    }

    public function notification()
    {
        $page_title = 'success Page';
        $page_description = "This is the success page";
        $message = "Thank You.";

        return view('pages.notification', compact('page_title', 'page_description', 'message'));
    }

    public function influencer()
    {
        $page_title = 'Influencer Enrollment';
        $page_description = "This is the Influencer Enrollment page";

        return view('pages.influencer', compact('page_title', 'page_description'));
    }
    
    public function postinfluencer(Request $request)
    {

        $page_title = 'success Page';
        $page_description = "This is the success page";
        $message = "Message send Successfully. We will get back to you. Thank You.";

        if($request['answer'] === '99'){
            // $name = "N/A";
            if ($request->has('first_name')) {
                $fromFirstName = $request['first_name'];
            }
            if ($request->has('last_name')) {
                $fromLastName = $request['last_name'];
            }
            if ($request->has('phone')) {
                $fromPhone = $request['phone'];
            }
            if ($request->has('email')) {
                $fromEmail = $request['email'];
            }
            
            if ($request->has('facebook')) {
                $theFacebook = $request['facebook'];
            }else{
                $theFacebook = 'N/A';    
            }
            
            if ($request->has('twitter')) {
                $theTwitter = $request['twitter'];
            }else{
                $theTwitter = 'N/A';
            }
            
            if ($request->has('instagram')) {
                $theInstagram = $request['instagram'];
            }else{
                $theInstagram = 'N/A';    
            }
            
            if ($request->has('tiktok')) {
                $theTiktok = $request['tiktok'];
            }else{
                $theTiktok = 'N/A';    
            }
            
            if ($request->has('youtube')) {
                $theYoutube = $request['youtube'];
            }else{
                $theYoutube = 'N/A';    
            }
            
            if ($request->has('other')) {
                $theOther = $request['other'];
            }else{
                $theOther = 'N/A';    
            }
            

            if ($request->has('niche')) {
                $theNiche = $request['niche'];
            }
            if ($request->has('partnership')) {
                $thePartnership = $request['partnership'];
            }
            if ($request->has('availability')) {
                $theAvailability = $request['availability'];
            }

            $data = array(
                'first_name' => $fromFirstName,
                'last_name' => $fromLastName,
                'phone'  => $fromPhone,
                'email' => $fromEmail,   
                'facebook' => $theFacebook,
                'twitter' => $theTwitter,
                'instagram' => $theInstagram,
                'tiktok' => $theTiktok,
                'youtube' => $theYoutube, 
                'other' => $theOther,
                'niche' => $theNiche,
                'partnership' => $thePartnership, 
                'availability' => $theAvailability, 
            );

            // try {
            //     print $response->statusCode() . "\n";
            //     print_r($response->headers());
            //     print $response->body() . "\n";
            // } catch (Exception $e) {
            //     echo 'Caught exception: '. $e->getMessage() ."\n";
            // }


            Mail::send('emails.influencer', $data, function($message) use ($data) {
                $message->to('info@mdigital.co.ke');
                $message->subject($data['first_name']." Influencer Signup" );
            });
            
            // return redirect(route('success'));
            return view('pages.notification', compact('page_title', 'page_description', 'message'));

        }else{
            // return view('pages.notification', ['message' => 'Error: Please go back and fill in the correct answer to the captcha question. Thank You.']);
            // return redirect(route('notification'))->with('message', 'Message not send.  ');

            return view('pages.notification', compact('page_title', 'page_description', 'message'));
        }
        
    }

    public function contacts()
    {
        $page_title = 'Contact Us';
        $page_description = "This is the contacts page";

        return view('pages.contacts', compact('page_title', 'page_description'));
    }

    public function postContacts(Request $request)
    {

        $page_title = 'success Page';
        $page_description = "This is the success page";
        $message = "Message send Successfully. We will get back to you. Thank You.";

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
            return view('pages.notification', compact('page_title', 'page_description', 'message'));

        }else{
            // return view('pages.notification', ['message' => 'Error: Please go back and fill in the correct answer to the captcha question. Thank You.']);
            // return redirect(route('notification'))->with('message', 'Message not send.  ');

            return view('pages.notification', compact('page_title', 'page_description', 'message'));
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