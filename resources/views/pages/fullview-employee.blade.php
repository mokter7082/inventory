@extends('layouts.app')

@section('content')
<div class="row animated fadeInRight">
            <!--BASIC-->
            <div class="col-md-7" style="margin-left:250px;">
                <h4 class="section-subtitle"><b>Employee All detailse</b></h4>
                <div class="panel">
                    <div class="panel-content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$fullview->employee_name}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$fullview->employee_email}}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{$fullview->employee_phone}}</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>{{$fullview->employee_address}}</td>
                                </tr>
                                <tr>
                                    <th>Experience</th>
                                    <td>{{$fullview->employee_experience}}</td>
                                </tr>
                                <tr>
                                    <th>Photo</th>
                                    <td><img src="{{url('employee_photo/'.$fullview->employee_photo)}}" alt="" style="height:50px;height:50px;"></td>
                                </tr>
                                <tr>
                                    <th>Salary</th>
                                    <td>{{$fullview->employee_salary}}</td>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

        </div>


@endsection
