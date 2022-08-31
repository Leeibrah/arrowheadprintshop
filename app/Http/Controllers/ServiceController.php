<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index(Request $request)
    {

        $page_title = 'Services';
        $page_description = "This is the Services page";


        return view('pages.services.index', compact('page_title', 'page_description'));
    }

    public function digitalMarketing(Request $request)
    {

        $page_title = 'Digital Marketing Service';
        $page_description = "This is the Digital Marketing page";


        return view('pages.services.digitalmarketing', compact('page_title', 'page_description'));
    }

    public function emailMarketing(Request $request)
    {

        $page_title = 'Email Marketing Service';
        $page_description = "This is the Email Marketing page";


        return view('pages.services.emailmarketing', compact('page_title', 'page_description'));
    }

    public function socialMediaManagement(Request $request)
    {

        $page_title = 'Social Media Management Service';
        $page_description = "This is the Social Media Management page";


        return view('pages.services.socialmedia', compact('page_title', 'page_description'));
    }

    public function webDesignDevelopment(Request $request)
    {

        $page_title = 'Web Design and Development Service';
        $page_description = "This is the Web Design and Development page";


        return view('pages.services.webdesign', compact('page_title', 'page_description'));
    }

    public function searchEngineMarketing(Request $request)
    {

        $page_title = 'search Engine Marketing Service';
        $page_description = "This is the Search Engine Marketing page";


        return view('pages.services.seo', compact('page_title', 'page_description'));
    }

    public function influencerMarketing(Request $request)
    {

        $page_title = 'Influencer Marketing Service';
        $page_description = "This is the Influencer Marketing page";


        return view('pages.services.influencermarketing', compact('page_title', 'page_description'));
    }

    public function contentCreation(Request $request)
    {

        $page_title = 'Content Creation Service';
        $page_description = "This is the Content Creation page";


        return view('pages.services.contentcreation', compact('page_title', 'page_description'));
    }

}