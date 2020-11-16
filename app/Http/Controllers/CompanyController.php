<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;


class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('company/show');
    }

    /*****Web Service*****/
    public function getAllCompany()
    {
        $companies = Company::pagination(10);
        return $companies;
    }
    
}
