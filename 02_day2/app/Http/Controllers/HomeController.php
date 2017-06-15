<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
    return "Welcome from controller!!!";
  }

  public function show($id){
    return "Welcome from controller!!!.$id";
  }
}
