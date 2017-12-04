<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Employees;
use App\Procedures;
use Validator;
use DB;
use Illuminate\Support\Carbon;

//this does nothing


class HomeController extends Controller
{


    public function home(){
      $currentTime = Carbon::now();
      $currentTime = new Carbon();
      return view('home')->with('currentTime', $currentTime);
    }
    public function rate(){
      $currentTime = Carbon::now();
      $currentTime = new Carbon();
      $employees = Employees::all();
      $procedures = Procedures::all();
      return view('rate')->with('employees', $employees)->with('procedures', $procedures)->with('currentTime', $currentTime);
    }

    public function saveVote(Request $request){

      $validator = Validator::make($request->all(),[
        'e__choice' => 'required',
        'rating' => 'required',''
      ]);

      if ($validator->fails()){
        return "ERROR";
      }
      $emp_id = $request->input('e__choice');
      Employees::find($emp_id)->increment('emp_votes');
      $employees = Employees::find($emp_id);
      $employees->emp_rating += $request->input('rating');
      $employees->emp_avarage = $employees->emp_rating / $employees->emp_votes;
      $employees->save();
      return Redirect::to('/');
    }




    public function results(){

      $currentTime = new Carbon();
      $employees = Employees::all();

      return view('results')->with('employees', $employees)->with('currentTime', $currentTime);
    }


}
