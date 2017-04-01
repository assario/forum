<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class SectionsController extends Controller
{
    //
    public function index() {

    	return view('pages.index');
    }
     public function show() {

    	return view('pages.section');
    }

}
