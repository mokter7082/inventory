<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class SalaryController extends Controller
{
    public function advanceSalary(){
    return view('pages.advance-salary');
    }
    public function saveAdvancesalary(Request $req){
      $month = $req->month;
      $emp_id = $req->emp_id;

      $adv_salary = DB::table('advance_salary')
                  ->where('emp_id',$emp_id)
                  ->where('month',$month)
                  ->first();

              if($adv_salary === NULL){
                $req->validate([
                              'emp_id' => 'required',
                              'month' => 'required',
                              'year' => 'required',
                              'advance_salary' => 'required',
                          ]);
                $data = array();
                $data['emp_id'] = $req->emp_id;
                $data['month'] = $req->month;
                $data['year'] = $req->year;
                $data['advance_salary'] = $req->advance_salary;
                DB::table('advance_salary')->insert($data);
                Session::flash('advance_salary','Advance Salary Paid');
                return Redirect::to('advance-salary');
              }else {
                echo 'ache';
              }
      //return $adv_salary;




    }
}
