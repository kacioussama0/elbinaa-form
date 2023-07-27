<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function show(){
        $registers = Form::orderBy('course_id')->get();
        return view('home',compact('registers'));
    }

    public function destroy($form){

        $result = Form::find($form);
        if($result -> delete()){
            return redirect()->to('/home');
        }
    }
}
