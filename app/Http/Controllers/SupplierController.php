<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class SupplierController extends Controller
{
  public function addSupplier(){
    return view('pages.add-supplier');
  }
  public function saveSupplier(Request $req){
    $req->validate([
                  'supplier_name' => 'required',
                  'supplier_email' => 'required',
                  'supplier_phone' => 'required',
                  'supplier_address' => 'required',
                  'shop_name' => 'required',
                  'account_holder' => 'required',
                  'account_number' => 'required',
                  'bank_name' => 'required',
                  'bank_branch' => 'required',
                  'city' => 'required',
                  'type' => 'required',
              ]);
    $data = array();
    $data['supplier_name'] = $req->supplier_name;
    $data['supplier_email'] = $req->supplier_email;
    $data['supplier_phone'] = $req->supplier_phone;
    $data['supplier_address'] = $req->supplier_address;
    $data['shop_name'] = $req->shop_name;
    $data['account_holder'] = $req->account_holder;
    $data['account_number'] = $req->account_number;
    $data['bank_name'] = $req->bank_name;
    $data['bank_branch'] = $req->bank_branch;
    $data['city'] = $req->city;
    $data['type'] = $req->type;
   // dd($data);
   // exit;
    $image = $req->file('supplier_photo');
    if($image){
         $image_name = Str::random(20);
          $ext = strtolower($image->getClientOriginalExtension());
          $image_fullname = $image_name.'.'.$ext;
          $upload_path ='supplier_photo';
          $image_url = $upload_path.$image_fullname;
          $success = $image->move($upload_path,$image_fullname);
          if($success){
          $data['supplier_photo']=$image_fullname;
          // dd($data);
          // exit;
         DB::table('supplier')->insert($data);
         Session::flash('supplier','Supplier Saved');
         return redirect::to('add-supplier');
      }
    }
 }

 public function allSupplier(){
   $all_sup =  DB::table('supplier')->get();
   // echo "<pre>";
   //  print_r($all_sup);
   // echo "</pre>";

    return view('pages.all-supplier',compact('all_sup'));
 }
}
