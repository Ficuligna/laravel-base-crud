<?php

namespace App\Http\Controllers;
use App\Dinosaurino;
use Illuminate\Http\Request;

class DinosauriniController extends Controller
{
  public function index(){
    $dinosaurini = Dinosaurino::all();
    return view("home", compact("dinosaurini"));
  }
  public function show($id){
    $dinosaurino = Dinosaurino::findOrFail($id);
    return view("show",compact("dinosaurino"));
  }
  public function delete($id){
    $dinosaurino = Dinosaurino::findOrFail($id);
    $dinosaurino -> delete();
    return redirect() -> route("home")
                      -> with('status', 'il dinosaurino '. $dinosaurino["first_name"] . ' è stato rimosso');
  }
  public function create(){
    return view("dinosaurino_create");
  }
  public function store(Request $request){

    $validate = $request ->validate([
       "first_name" => 'required|string',
       "last_name" => 'required|string',
       "address" => 'required|string',
       "code" => 'required|string',
       "state" => 'required|string',
       "phone_number" => 'required|digits_between:8,12',
       "role" => 'required|string',
       "morto_per_colpa_di_Albano" => 'required|string'

    ]);

    $dinosaurino = new Dinosaurino;
    $dinosaurino -> first_name = $request -> first_name;
    $dinosaurino -> last_name = $request -> last_name;
    $dinosaurino -> address = $request -> address;
    $dinosaurino -> code = $request -> code;
    $dinosaurino -> state = $request -> state;
    $dinosaurino -> phone_number = $request -> phone_number;
    $dinosaurino -> role = $request -> role;
    $dinosaurino -> morto_per_colpa_di_Albano = $request -> morto_per_colpa_di_Albano;

    $dinosaurino -> save();
    return redirect() -> route("home")
                      -> with('status', 'il dinosaurino '. $dinosaurino["first_name"] . ' è stato aggiunto');

  }
  public function edit($id){

    $dinosaurino = Dinosaurino::findOrFail($id);

    return view("dinosaurino_edit", compact("dinosaurino"));
  }
  public function update(Request $request , $id){

    $dinosaurino = Dinosaurino::findOrFail($id);

    $dinosaurino -> first_name = $request -> first_name;
    $dinosaurino -> last_name = $request -> last_name;
    $dinosaurino -> address = $request -> address;
    $dinosaurino -> code = $request -> code;
    $dinosaurino -> state = $request -> state;
    $dinosaurino -> phone_number = $request -> phone_number;
    $dinosaurino -> role = $request -> role;
    $dinosaurino -> morto_per_colpa_di_Albano = $request -> morto_per_colpa_di_Albano;

    $dinosaurino -> save();

    return redirect() -> route("home")
                      -> with('status', 'il dinosaurino '. $dinosaurino["first_name"] . ' è stato modificato');

  }

}
