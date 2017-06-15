<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
    $data=array('page_name'=>'Profile page',
    'contents'=>'lot of content goes here');

    return view('profile',compact('data'));
  }

  public function show($id){
    return "Welcome from controller!!!.$id";
  }
}
