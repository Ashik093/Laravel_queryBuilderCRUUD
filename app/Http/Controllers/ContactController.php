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
    public function AddContact(){
    	return view('pages.insertContact');
    }
    public function insertContact(Request $request){
    	$data = array();
    	$data['name'] = $request->name;
    	$data['email'] = $request->email;
    	$data['description'] = $request->description;
    	$insert = DB::table('contacts')->insert($data);

    	//return Redirect()->back();
    	return Redirect()->route('all.contacts');
    }
    public function DeleteContact($id){
    	$delete = DB::table('contacts')->where('id',$id)->delete();

    	return Redirect()->route('all.contacts');
    }
    public function Edit($id){
    	$data = DB::table('contacts')->where('id',$id)->first();
    	return view('pages.editContact',compact('data'));
    }
    public function UpdateContact(Request $request,$id){
    	$data = array();
    	$data['name']=$request->name;
    	$data['email']=$request->email;
    	$data['description']=$request->description;

    	$update = DB::table('contacts')->where('id',$id)->update($data);

    	return Redirect()->route('all.contacts');
    }
    public function ViewContact($id){
    	$data = DB::table('contacts')->where('id',$id)->first();
    	return view('pages.view',compact('data'));
    }
}
