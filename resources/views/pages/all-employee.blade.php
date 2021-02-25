@extends('layouts.app')

@section('content')
<div class="col-sm-12 col-lg-12">
<div class="">
            @include('sweet::alert')
            @if (Session::has('update_massage'))
                <div class="alert alert-success">{{ Session::get('update_massage') }}</div>
            @endif
                   <h4 class="section-subtitle"><b>Searching, ordering and paging</b></h4>
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
                                 @foreach($all_emp as $row)
                                       <tr id = "tr-{{$row->employee_id}}">
                                          <input type="hidden" value="{{$row->employee_id}}"  id="getId">
                                           <td>{{ $row->employee_name}}</td>
                                           <td>{{ $row->employee_email}}</td>
                                           <td>{{ $row->employee_phone}}</td>
                                           <td>
                                              <img src="{{url('employee_photo/'.$row->employee_photo)}}" alt="" style="height:50px;height:50px;">
                                           </td>
                                           <td>{{ $row->employee_address}}</td>
                                           <td class="text-center">

                                              <button type="button" class="btn btn-warning update"><i class="fa fa-edit"></i></button>
                                              <button type="button" class="btn btn-danger deleteId" id="delete"><i class="fa fa-trash"></i></button>
                                              <!-- <a href="" id="delete" class="btn btn-danger"><i class="fa fa-trash"></i></a> -->
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




               <!--DEFAULT update  modal-->
            @include('includeFile.updatModal')





              <script type="text/javascript">
                $(document).ready(function(){
                    $('.update').on('click',function(){
                      $('#updateemp').modal('show');
                      var employee_id = $(this).closest("tr").find('#getId').val();
                      $.ajax({
                          type: 'GET',
                          url: '{{url('getempinfo')}}/' + employee_id,
                          dataType: "json",
                          success: function (data) {
                            $('#id').val(data.employee_id);
                              $('#emp_name').val(data.employee_name);
                              $('#emp_email').val(data.employee_email);
                              $('#emp_phone').val(data.employee_phone);
                              $('#emp_address').val(data.employee_address);
                              $('#emp_experience').val(data.employee_experience);
                              $('#emp_salary').val(data.employee_salary);
                            console.log(data);
                          },
                          error: function() {
                                console.log(data);
                          }
                      });
                    });




                });

                $(document).on("click","#u_submit",function() {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            //   alert('hi');
                var editid = $('#id').val();
                var editname = $('#emp_name').val();
                var editemail = $('#emp_email').val();
                var editphone = $('#emp_phone').val();
                var editaddress = $('#emp_address').val();
                var editexperience = $('#emp_experience').val();
                var editsalary = $('#emp_salary').val();
                // alert(editsalary);
              // var data = {
              //   "_token": "{{ csrf_token() }}",
              //   "id": editid,
              //   };
              // alert(emp_name);
              $.ajax({
                 type: 'POST',
                 url: '{{route('empupdate')}}',
                 method: 'POST',
                 data: {
                    "_token": "{{ csrf_token() }}",
                    "id": editid


                  },
                 success: function(data){
                   console.log(data);
                 }
              })
                });

              </script>
              <!-- delete modal -->
               <script>
               $( document ).ready(function(e) {
                 $.ajaxSetup({
                       headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       }
                   });
                  $('.deleteId').on('click',function(e){
                    e.preventDefault();
                    var employee_id = $(this).closest("tr").find('#getId').val();
                  //  alert(deletethis);
                    swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to recover this imaginary file!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                      })
                      .then((willDelete) => {
                        if (willDelete) {
                          var data ={
                            "_token": $('input[name="csrf-token"]').val(),
                            "id": employee_id,
                          };
                          console.log(data);
                          $.ajax({
                                  type: 'GET',
                                  url:"{{ url('delete-employee') }}/" + employee_id,
                                  data: data,
                                  success: function(response){
                                    swal("Poof! Your imaginary file has been deleted!", {
                                      icon: "success",
                                    })
                                $("#tr-"+employee_id).remove();
                                  }
                                });

                        } else {
                          swal("Your imaginary file is safe!");
                        }
                      });
                  })



                  // $('.update').on('click',function(e){
                  // //  alert('click');
                  // e.preventDefault();
                  // var employee_id = $(this).closest("tr").find('#getId').val();
                  // // alert(employee_id);
                  //
                  //
                  // $.ajax({
                  //         type: 'GET',
                  //         url:"{{url('delete-employee') }}/" + employee_id,
                  //            success: function(data) {
                  //       console.log(data);
                  //     }
                  //    });
                  // })
                });
               </script>



               <!-- Modal -->
                              <!-- <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-labelledby="modal-error-label">
                                  <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header state modal-danger">
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                              <h4 class="modal-title" id="modal-error-label"><i class="fa fa-warning"></i>Are you sure delete this employee</h4>
                                          </div>
                                          <div class="modal-footer">
                                              <a href="{{route('delete-employee',$row->employee_id)}}"class="btn btn-danger">OK</a>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                          </div>
                                      </div>
                                  </div>
                              </div> -->


@endsection
