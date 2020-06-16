<?php

namespace App\Http\Controllers;
use App\Cane;
use Illuminate\Http\Request;

class CaneController extends Controller
{
  public function index(){
    $cani = Cane::all();


    return view('home',compact("cani"));

  }
  public function show($id){
    $cane = Cane::findOrFail($id);


    return view('show_cane',compact("cane"));
  }

}
