<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    // membuat attribute name
    private $name = "Fatah At Thariq";
    private $code = "190613015";

    public function index(){
        return view("person.index");
    }
    public function sendData(){
        $code = $this -> code;
        $name = $this -> name;
        return view("person.sendData", compact('code', 'name'));
    }
    public function show($param){
        $this -> name = $param;
        return $this -> name;
    }
    public function data(){
        $names = ["acep", 'bagus', 'cecep', 'doni', 'erik', 'fatah'];
        return view('person.data', ['names' => $names]); 
    }
    public function add(){
        return view('person.add');
    }
    public function addProcess(Request $request){
        $this -> validate($request, [
            'person_name' => 'required|max:30',
            'person_email' => 'required|email'
        ]);
        return  view('person.show', ['data' => $request]);
    }
}
