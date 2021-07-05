<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {
        return view('app.index');
    }

    public function about()
    {
        return view('app.about');
    }

    public function services()
    {
        return view('app.services');
    }

    public function exportImport()
    {
        return view('app.export-import');
    }

    public function whyUs()
    {
        return view('app.why-us');
    }

    public function skill()
    {
        return view('app.skill');
    }

    public function clients()
    {
        return view('app.clients');
    }

    public function blog()
    {
        return view('app.blog');
    }

    public function blogDetail()
    {
        return view('app.blog-detail');
    }

    public function errorPage()
    {
        return view('app.error-page');
    }

    public function contact()
    {
        return view('app.contact');
    }

    public function projects()
    {
        return view('app.projects');
    }


}
