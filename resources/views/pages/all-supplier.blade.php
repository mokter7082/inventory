@extends('layouts.app')

@section('content')
<div class="col-sm-12 col-lg-12">
<div class="">
            @if (Session::has('update_massage'))
                <div class="alert alert-success">{{ Session::get('update_massage') }}</div>
            @endif
                   <h4 class="section-subtitle"><b>All</b> Supplier</h4>
                   <div class="panel">
                       <div class="panel-content">
                           <div class="table-responsive">
                               <table id="basic-table" class="data-table table table-striped nowrap table-hover" cellspacing="0" width="100%">
                                   <thead>
                                   <tr>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Phone</th>
                                       <th>photo</th>
                                       <th>Address</th>
                                       <th class="text-center">Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                 @foreach($all_sup as $row)
                                       <tr>
                                           <td>{{ $row->supplier_name}}</td>
                                           <td>{{ $row->supplier_email}}</td>
                                           <td>{{ $row->supplier_phone}}</td>
                                           <td>
                                              <img src="{{url('supplier_photo/'.$row->supplier_photo)}}" alt="" style="height:50px;height:50px;">
                                           </td>
                                           <td>{{ $row->supplier_address}}</td>
                                           <td class="text-center">
                                              <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                              <a href="" class="btn btn-danger" data-toggle="modal" data-target="#error-modal"><i class="fa fa-trash"></i></a>
                                              <a href="" class="btn btn-danger"><i class="fa fa-eye"></i></a>
                                           </td>
                                       </tr>
                                 @endforeach
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>
               </div>


               <!-- Modal -->
                              <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="modal-error-label">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header state modal-danger">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              <h4 class="modal-title" id="modal-error-label"><i class="fa fa-warning"></i>Are you sure delete this employee</h4>
                                          </div>
                                          <div class="modal-footer">
                                              <a href=""class="btn btn-danger">OK</a>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>


@endsection
