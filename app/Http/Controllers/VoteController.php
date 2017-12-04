<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employees;

class VoteController extends Controller
{
    public function process(Request $request){

        $this->validate($request, [
            'employeeid' => 'required',
            'rating' => 'required',
            ]);

        $emp_id = $request->input('employeeid');
        Employees::find($emp_id)->increment('emp_votes');
        $employees = Employees::find($emp_id);
        $employees->emp_rating += $request->input('rating');
        $employees->emp_avarage = $employees->emp_rating / $employees->emp_votes;
        $employees->save();


    }
}
