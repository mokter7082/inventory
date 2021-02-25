@extends('layouts.app')

@section('content')
<div class="col-sm-12 col-lg-9">
<div class="col-sm-12 col-md-10 col-sm-offset-3">
                    <h4 class="section-subtitle text-center"><b>Add</b> Suppier</h4>
                    @if (Session::has('supplier'))
                      	<div class="alert alert-success">{{ Session::get('supplier') }}</div>
                    @endif
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{route('save-supplier')}}" enctype="multipart/form-data">
                                      @csrf
                                        <div class="form-group">
                                            <label for="">Supplier Name</label>
                                            <input type="text" name="supplier_name" class="form-control" placeholder="please enter nmae">
                                            @if ($errors->has('supplier_name'))
                                                <span class="text-danger">{{ $errors->first('supplier_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Supplier Email</label>
                                            <input type="email" name="supplier_email" class="form-control" placeholder="please enter email">
                                            @if ($errors->has('supplier_email'))
                                                <span class="text-danger">{{ $errors->first('supplier_email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Supplier Phone</label>
                                            <input type="text" name="supplier_phone" class="form-control" placeholder="please enter number">
                                            @if ($errors->has('supplier_phone'))
                                                <span class="text-danger">{{ $errors->first('supplier_phone') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Supplier Address</label>
                                            <input type="text" name="supplier_address" class="form-control" placeholder="please enter address">
                                            @if ($errors->has('supplier_address'))
                                                <span class="text-danger">{{ $errors->first('supplier_address') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Supplier Photo</label>
                                            <input type="file" name="supplier_photo" class="form-control">
                                            @if ($errors->has('supplier_photo'))
                                                <span class="text-danger">{{ $errors->first('supplier_photo') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Shop Name</label>
                                            <input type="text" name="shop_name" class="form-control" placeholder="please enter Shop name">
                                            @if ($errors->has('shop_name'))
                                                <span class="text-danger">{{ $errors->first('shop_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Account Holder</label>
                                            <input type="text" name="account_holder" class="form-control" placeholder="please enter Account Holder">
                                            @if ($errors->has('account_holder'))
                                                <span class="text-danger">{{ $errors->first('account_holder') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Account Number</label>
                                            <input type="text" name="account_number" class="form-control" placeholder="please enter Account number">
                                            @if ($errors->has('account_number'))
                                                <span class="text-danger">{{ $errors->first('account_number') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Bank Name</label>
                                            <input type="text" name="bank_name" class="form-control" placeholder="please enter Bank name">
                                            @if ($errors->has('bank_name'))
                                                <span class="text-danger">{{ $errors->first('bank_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Bank Branch</label>
                                            <input type="text" name="bank_branch" class="form-control" placeholder="please enter bank branch">
                                            @if ($errors->has('bank_branch'))
                                                <span class="text-danger">{{ $errors->first('bank_branch') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Supplier City</label>
                                            <input type="text" name="city" class="form-control" placeholder="please enter city">
                                            @if ($errors->has('city'))
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Supplier Type</label>
                                            <select name="type" class="form-control">
                                              <option>--select--</option>
                                              <option value="Home Seller">Home Seller</option>
                                              <option value="Home Seller2">Home Seller2</option>
                                              <option value="Home Seller3">Home Seller3</option>
                                            </select>
                                            @if ($errors->has('city'))
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group col-sm-offset-8">
                                            <button type="submit" class="btn btn-primary btn-block">Add Supplier</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
@endsection
