@extends('layouts.app')

@section('content')
<div class="col-sm-12 col-lg-9">
<div class="col-sm-12 col-md-10 col-sm-offset-3">
                    <h4 class="section-subtitle text-center"><b>Add</b> Customar</h4>
                    @if (Session::has('customar'))
                      	<div class="alert alert-info">{{ Session::get('customar') }}</div>
                    @endif
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{route('save-customar')}}" enctype="multipart/form-data">
                                      @csrf
                                        <div class="form-group">
                                            <label for="">Customar Name</label>
                                            <input type="text" name="customar_name" class="form-control" placeholder="please enter nmae">
                                            @if ($errors->has('customar_name'))
                                                <span class="text-danger">{{ $errors->first('customar_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Customar Email</label>
                                            <input type="text" name="customar_email" class="form-control" placeholder="please enter email">
                                            @if ($errors->has('customar_email'))
                                                <span class="text-danger">{{ $errors->first('customar_email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Customar Phone</label>
                                            <input type="text" name="customar_phone" class="form-control" placeholder="please enter number">
                                            @if ($errors->has('customar_phone'))
                                                <span class="text-danger">{{ $errors->first('customar_phone') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Customar Address</label>
                                            <input type="text" name="customar_address" class="form-control" placeholder="please enter address">
                                            @if ($errors->has('customar_address'))
                                                <span class="text-danger">{{ $errors->first('customar_address') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="">Customar Photo</label>
                                            <input type="file" name="customar_photo" class="form-control">
                                            @if ($errors->has('customar_photo'))
                                                <span class="text-danger">{{ $errors->first('customar_photo') }}</span>
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
                                        <div class="form-group col-sm-offset-8">
                                            <button type="submit" class="btn btn-primary btn-block">Add Customar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
@endsection
