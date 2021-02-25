@extends('layouts.app')

@section('content')
<div class="col-sm-12 col-lg-12">
<div class="">
            @if (Session::has('update_massage'))
                <div class="alert alert-success">{{ Session::get('update_massage') }}</div>
            @endif
                   <h4 class="section-subtitle"><b>All</b> Customar</h4>
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
                                 @foreach($all_cus as $row)
                                       <tr>
                                         <input type="hidden" id="id" value="{{ $row->customar_id}}">
                                           <td>{{ $row->customar_name}}</td>
                                           <td>{{ $row->customar_email}}</td>
                                           <td>{{ $row->customar_phone}}</td>
                                           <td>
                                              <img src="{{url('customar_photo/'.$row->customar_photo)}}" alt="" style="height:50px;height:50px;">
                                           </td>
                                           <td>{{ $row->customar_address}}</td>
                                           <td class="text-center">
                                             <button type="button" class="btn btn-warning editbtn"><i class="fa fa-edit"></i></button>
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


                   @include('includeFile.cusupdateModel')


               <script type="text/javascript">
                 $(document).ready(function(){
                   $('.editbtn').on('click',function(){
                     // $('#updatecus').modal('show');
                     var cusId = $(this).closest("tr").find('#id').val();
                     $.ajax({
                         type: 'GET',
                         url: '{{url('edit_customar')}}/' + cusId,
                         dataType: "json",
                         success: function (data) {
                           console.log(data);
                         },
                         error: function() {
                               console.log(data);
                         }
                     });
                   })
                 });
               </script>





@endsection
