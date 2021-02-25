@extends('layouts.app')

@section('content')
<div class="col-sm-12 col-lg-9">
<div class="col-sm-12 col-md-10 col-sm-offset-3">
                    <h4 class="section-subtitle text-center"><b>Add</b> Employee</h4>
                    @if (Session::has('advance_salary'))
                      	<div class="alert alert-info">{{ Session::get('advance_salary') }}</div>
                    @endif
                    <div class="panel">
                        <div class="panel-content">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="{{route('save-advancesalary')}}" enctype="multipart/form-data">
                                      @csrf
                                    <?php
                                      $emp = DB::table('employees')->get();
                                      // echo "<pre>";
                                      //   print_r($emp);
                                      // echo "</pre>";

                                    ?>
                                        <div class="form-group">
                                          <label for="email">Employee Name</label>
                                            <select name="emp_id" id="" class="form-control">
                                              <option value="">--select--</option>
                                              @foreach($emp as $row)
                                              <option value="{{$row->employee_id}}">{{$row->employee_name}}</option>
                                              @endforeach
                                              @if ($errors->has('emp_id'))
                                                  <span class="text-danger">{{ $errors->first('emp_id') }}</span>
                                              @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="">Month</label>
                                            <select name="month" id="" class="form-control">
                                              <option value="">--select--</option>
                                              <option value="January">January</option>
                                              <option value="February">February</option>
                                              <option value="March">March</option>
                                              @if ($errors->has('month'))
                                                  <span class="text-danger">{{ $errors->first('month') }}</span>
                                              @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                          <label for="">Year</label>
                                            <select name="year" id="" class="form-control">
                                              <option value="">--select--</option>
                                              <option value="2021">2021</option>
                                              <option value="2022">2022</option>
                                              <option value="2023">2023</option>
                                              @if ($errors->has('year'))
                                                  <span class="text-danger">{{ $errors->first('year') }}</span>
                                              @endif
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="text">Advance Salary</label>
                                            <input type="text" name="advance_salary" class="form-control" placeholder="Advance Salary">
                                            @if ($errors->has('advance_salary'))
                                                <span class="text-danger">{{ $errors->first('advance_salary') }}</span>
                                            @endif
                                        </div>
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
