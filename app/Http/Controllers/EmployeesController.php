<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class EmployeesController extends Controller
{
    public function addEmployee(){
      return view('pages.add-employee');
    }
    public function saveEmployee(Request $req){
      $req->validate([
                    'employee_name' => 'required',
                    'employee_email' => 'required',
                    'employee_phone' => 'required',
                    'employee_address' => 'required',
                    'employee_experience' => 'required',
                    'employee_salary' => 'required',
                    'employee_vacation' => 'required',
                    'publication_status' => 'required',
                ]);
      $data = array();
      $data['employee_name'] = $req->employee_name;
      $data['employee_email'] = $req->employee_email;
      $data['employee_phone'] = $req->employee_phone;
      $data['employee_address'] = $req->employee_address;
      $data['employee_experience'] = $req->employee_experience;
      $data['employee_salary'] = $req->employee_salary;
      $data['employee_vacation'] = $req->employee_vacation;
      $data['publication_status'] = $req->publication_status ?? '0';
      $image = $req->file('employee_photo');
      if($image){
           $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullname = $image_name.'.'.$ext;
            $upload_path ='employee_photo';
            $image_url = $upload_path.$image_fullname;
            $success = $image->move($upload_path,$image_fullname);
            if($success){
            $data['employee_photo']=$image_fullname;
            // dd($data);
            // exit;
          DB::table('employees')->insert($data);
           Session::flash('message','Employee Saved');
           return redirect::to('add-employee');
        }
      }
   }


public function allEmployee(){
    $all_emp=array();
  $all_emp =  DB::table('employees')->get();
  // echo "<pre>";
  //  print_r($all_emp);
  // echo "</pre>";

   return view('pages.all-employee',compact('all_emp'));
}
public function editeEmployee($employee_id){
  $edite_emp = DB::table('employees')
                 ->where('employee_id',$employee_id)
                 ->first();
      // echo "<pre>";
      //  print_r($edite_emp);
      // echo "</pre>";
      return view('pages.edite-employee',compact('edite_emp'));
    }
    public function updateEmployee(Request $req,$employee_id){
      $data = array();
      $data['employee_name'] = $req->employee_name;
      $data['employee_email'] = $req->employee_email;
      $data['employee_phone'] = $req->employee_phone;
      $data['employee_address'] = $req->employee_address;
      $data['employee_salary'] = $req->employee_salary;
      $data['employee_vacation'] = $req->employee_vacation;
       DB::table('employees')
               ->where('employee_id',$employee_id)
               ->update($data);
            Session::flash('update_massage','update Success');
            return redirect::to('all-employee');

    }
    public function deleteEmployee($employee_id){
      DB::table('employees')
              ->where('employee_id',$employee_id)
              ->delete();
          return Redirect::to('all-employee');

    }
  public function fullviewEmployee($employee_id){
      $fullview = DB::table('employees')
               ->where('employee_id',$employee_id)
               ->first();
               // echo "<pre>";
               //  print_r($fullview);
               // echo "</pre>";
               return view('pages.fullview-employee',compact('fullview'));
  }

//AJAX CODE HERE
  public function getempInfo($id){
    $conFig = DB::table('employees')->where('employee_id', $id)->first();
       return response()->json($conFig);
  }
    public function empUpdate(){
        
    }
}
