<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class CustomarController extends Controller
{
  public function addCustomar(){
    return view('pages.add-customar');
  }
  public function saveCustomar(Request $req){

    $req->validate([
                  'customar_name' => 'required',
                  'customar_email' => 'required',
                  'customar_phone' => 'required',
                  'customar_address' => 'required',
                  'shop_name' => 'required',
                  'account_holder' => 'required',
                  'account_number' => 'required',
                  'bank_name' => 'required',
                  'bank_branch' => 'required',

              ]);
    $data = array();
    $data['customar_name'] = $req->customar_name;
    $data['customar_email'] = $req->customar_email;
    $data['customar_phone'] = $req->customar_phone;
    $data['customar_address'] = $req->customar_address;
    $data['shop_name'] = $req->shop_name;
    $data['account_holder'] = $req->account_holder;
    $data['account_number'] = $req->account_number;
    $data['bank_name'] = $req->bank_name;
    $data['bank_branch'] = $req->bank_branch;
    $image = $req->file('customar_photo');
    if($image){
         $image_name = Str::random(20);
          $ext = strtolower($image->getClientOriginalExtension());
          $image_fullname = $image_name.'.'.$ext;
          $upload_path ='customar_photo';
          $image_url = $upload_path.$image_fullname;
          $success = $image->move($upload_path,$image_fullname);
          if($success){
          $data['customar_photo']=$image_fullname;
          //dd($data);
        DB::table('customar')->insert($data);
         Session::flash('customar','Customar Saved');
         return redirect::to('add-customar');
      }
    }
 }
 public function allCustomar(){
   $all_cus =  DB::table('customar')->get();
   // echo "<pre>";
   //  print_r($all_cus);
   // echo "</pre>";

    return view('pages.all-customar',compact('all_cus'));
 }
 public function editCustomar($cusId){
   $all_customar = DB::table('customar')
             ->where('customar_id',$cusId)
             ->first();
        return response()->json($all_customar);

 }
}
