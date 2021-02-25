@extends('layouts.app')

@section('content')
<div class="col-sm-12 col-lg-9">
<div class="col-sm-12 col-md-10 col-sm-offset-3">
                    <h4 class="section-subtitle text-center"><b>Add</b> Employee</h4>
                    @if (Session::has('message'))
                      	<div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{route('save-employee')}}" enctype="multipart/form-data">
                                      @csrf
                                        <div class="form-group">
                                            <label for="email">Employee Name</label>
                                            <input type="text" name="employee_name" class="form-control" placeholder="please enter nmae">
                                            @if ($errors->has('employee_name'))
                                                <span class="text-danger">{{ $errors->first('employee_name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Employee Email</label>
                                            <input type="text" name="employee_email" class="form-control" placeholder="please enter email">
                                            @if ($errors->has('employee_email'))
                                                <span class="text-danger">{{ $errors->first('employee_email') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Employee Phone</label>
                                            <input type="text" name="employee_phone" class="form-control" placeholder="please enter number">
                                            @if ($errors->has('employee_phone'))
                                                <span class="text-danger">{{ $errors->first('employee_phone') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Employee Address</label>
                                            <input type="text" name="employee_address" class="form-control" placeholder="please enter address">
                                            @if ($errors->has('employee_address'))
                                                <span class="text-danger">{{ $errors->first('employee_address') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Employee Experience</label>
                                            <input type="text" name="employee_experience" class="form-control" placeholder="please enter experience">
                                            @if ($errors->has('employee_experience'))
                                                <span class="text-danger">{{ $errors->first('employee_experience') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Employee Photo</label>
                                            <input type="file" name="employee_photo" class="form-control">
                                            @if ($errors->has('employee_photo'))
                                                <span class="text-danger">{{ $errors->first('employee_photo') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Employee Salary</label>
                                            <input type="text" name="employee_salary" class="form-control" placeholder="please enter salary">
                                            @if ($errors->has('employee_salary'))
                                                <span class="text-danger">{{ $errors->first('employee_salary') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Employee Vocation</label>
                                            <input type="text" name="employee_vacation" class="form-control" placeholder="please enter vocation">
                                            @if ($errors->has('employee_vacation'))
                                                <span class="text-danger">{{ $errors->first('employee_vacation') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Publication Status</label>
                                            <input type="checkbox" name="publication_status" value="1">
                                        </div>
                                        <div class="form-group col-sm-offset-8">
                                            <button type="submit" class="btn btn-primary btn-block">Add Employee</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
@endsection
