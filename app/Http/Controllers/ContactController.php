<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function Index(){

    	$contacts = DB::table('contacts')->get();
    	return view('pages.contacts')->with('contacts',$contacts);
    }
}
