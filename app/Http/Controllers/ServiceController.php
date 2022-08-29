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

    public function accounting(Request $request)
    {

        $page_title = 'Accounting Service';
        $page_description = "This is the Accounting page";


        return view('pages.services.accounting', compact('page_title', 'page_description'));
    }

    public function emailMarketing(Request $request)
    {

        $page_title = 'Email Marketing Service';
        $page_description = "This is the Email Marketing page";


        return view('pages.services.emailmarketing', compact('page_title', 'page_description'));
    }

    public function forensicInvestigation(Request $request)
    {

        $page_title = 'Forensic and Investigation Service';
        $page_description = "This is the Forensic Investigation page";


        return view('pages.services.forensicinvestigation', compact('page_title', 'page_description'));
    }

    public function tax(Request $request)
    {

        $page_title = 'Tax Service';
        $page_description = "This is the tax page";


        return view('pages.services.tax', compact('page_title', 'page_description'));
    }

    public function businessAdvisory(Request $request)
    {

        $page_title = 'Business Advisory Service';
        $page_description = "This is the Business Advisory page";


        return view('pages.services.businessadvisory', compact('page_title', 'page_description'));
    }

    public function auditAssurance(Request $request)
    {

        $page_title = 'Audit and Assurance Service';
        $page_description = "This is the Audit Assurance page";


        return view('pages.services.auditassurance', compact('page_title', 'page_description'));
    }

}