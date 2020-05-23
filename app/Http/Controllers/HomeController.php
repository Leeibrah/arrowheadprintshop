<?php namespace App\Http\Controllers;

use Exception;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Redirect;
use Setting;

use Laravelista\Bard\UrlSet as Sitemap;
use Laravelista\Bard\SitemapIndex;
use Sabre\Xml\Writer;


class HomeController extends Controller
{

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Request $request)
    {
        $homeRouteName = 'welcome';

        // $request->session()->reflash();
        // return Redirect::route($homeRouteName);

        $page_title = "Vinestalk Credit Kenya Limited | Your Credit and Financial Consultancy Partner";
        $page_description = "Vinestalk :: Home Page";

        // $request->flashExcept(['password', 'password_confirmation']);
        $request->session()->reflash();
        return view('welcome', compact('page_title', 'page_description'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome(Request $request)
    {
        $page_title = "Vinestalk Credit Kenya Limited | Home";
        $page_description = "This is the welcome page";

        //$request->flashExcept(['password', 'password_confirmation']);
        $request->session()->reflash();
        return view('welcome', compact('page_title', 'page_description'));
    }


    public function about()
    {
        $page_title = 'About Us | Vinestalk Kenya Limited';
        $page_description = "This is the about page";

        return view('pages.about', compact('page_title', 'page_description'));
    }

    public function services()
    {
        $page_title = 'Vinestalk | Services';
        $page_description = "This is the services page";

        return view('pages.services.index', compact('page_title', 'page_description'));
    }

    public function productLoans()
    {
        $page_title = 'Vinestalk Limited | Product Loans';
        $page_description = "This is the productLoans page";

        return view('pages.services.product-loans', compact('page_title', 'page_description'));
    }

    public function financialLiteracy()
    {
        $page_title = 'Vinestalk Kenya | Financial Literacy';
        $page_description = "This is the Financial Literacy page";

        return view('pages.services.financial-literacy', compact('page_title', 'page_description'));
    }

    public function managementAccounting()
    {
        $page_title = 'Vinestalk Management Accounting';
        $page_description = "This is the Management Accounting page";

        return view('pages.services.management-accounting', compact('page_title', 'page_description'));
    }

    public function consulting()
    {
        $page_title = 'Vinestalk | Consultation';
        $page_description = "This is the Consulting page";

        return view('pages.consulting', compact('page_title', 'page_description'));
    }

    public function termsandconditions()
    {
        $page_title = 'Terms and Conditions | Vinestalk';
        $page_description = "This is the Terms and Conditions page";

        return view('pages.terms', compact('page_title', 'page_description'));
    }

    
    public function privacypolicy()
    {
        $page_title = 'Vinestalk Privacy Policy Page';
        $page_description = "This is the Privacy Policy page";

        return view('pages.privacy', compact('page_title', 'page_description'));
    }
    
    public function contacts()
    {
        $page_title = 'Contacts Us | Vinestalk Credit Kenya Limited ';
        $page_description = "This is the contacts page";

        return view('pages.contacts', compact('page_title', 'page_description'));
    }

    public function blog()
    {
        $page_title = 'Vinestalk | Blog';
        $page_description = "This is the blog page";

        return view('pages.blog.index', compact('page_title', 'page_description'));
    }

    public function leap()
    {
        $page_title = 'Vinestalk | Blog';
        $page_description = "Leap of Faith";

        return view('pages.blog.leap-of-faith', compact('page_title', 'page_description'));
    }

    public function mail(){
    
         \Mail::send('emails.test',
             ['testVar' => 'Just Text Two dede'],
             function($message){
                $message->to('leeibrah@gmail.com')
                    ->subject('A Simple Word');
                // $message->attach(public_path().'/files/pdfs/invoice_177399.pdf');
             });

         var_dump('pass');
    }

    public function generateSitemap(Sitemap $sitemap)
    {
        $sitemap->addUrl(route('home'))
            ->setPriority(1.0)
            ->setChangeFrequency('daily'); 

        $sitemap->addUrl(route('about'))
            ->setPriority(0.8)
            ->setChangeFrequency('daily');

        $sitemap->addUrl(route('services'))
            ->setPriority(0.8)
            ->setChangeFrequency('daily');

        $sitemap->addUrl(route('product-loans'))
            ->setPriority(0.8)
            ->setChangeFrequency('daily');

        $sitemap->addUrl(route('financial-literacy'))
            ->setPriority(0.8)
            ->setChangeFrequency('daily');

        $sitemap->addUrl(route('management-accounting'))
            ->setPriority(0.8)
            ->setChangeFrequency('daily');

        $sitemap->addUrl(route('blog'))
            ->setPriority(0.8)
            ->setChangeFrequency('daily');

        $sitemap->addUrl(route('consulting'))
            ->setPriority(0.8)
            ->setChangeFrequency('daily');

        $sitemap->addUrl(route('contacts'))
            ->setPriority(0.8)
            ->setChangeFrequency('daily');

        $sitemap->addUrl(route('terms'))
            ->setPriority(0.8)
            ->setChangeFrequency('daily');

        $sitemap->addUrl(route('privacy'))
            ->setPriority(0.8)
            ->setChangeFrequency('daily');

        $sitemap->addUrl(route('sitemap'))
            ->setPriority(0.8)
            ->setChangeFrequency('daily');

        $sitemapIndex = new SitemapIndex(new Writer);          

        $sitemapIndex->addSitemap('http://localhost:8000/sitemap.xml');
         

        return $sitemap->render();
    }

}