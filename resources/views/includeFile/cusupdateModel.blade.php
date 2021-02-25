<div class="modal fade" id="updatecus" tabindex="-1" role="dialog" aria-labelledby="modal-label">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-label">Update Employee</h4>
            </div>
            <div class="modal-body">
              <form method="post" action="{{route('save-employee')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value=""  id="id">
                  <div class="form-group">
                      <label for="email">Employee Name</label>
                      <input type="text" name="employee_name" id="emp_name" class="form-control" placeholder="please enter nmae">
                      @if ($errors->has('employee_name'))
                          <span class="text-danger">{{ $errors->first('employee_name') }}</span>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="email">Employee Email</label>
                      <input type="text" name="employee_email" id="emp_email" class="form-control" placeholder="please enter email">
                      @if ($errors->has('employee_email'))
                          <span class="text-danger">{{ $errors->first('employee_email') }}</span>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="email">Employee Phone</label>
                      <input type="text" name="employee_phone" id="emp_phone" class="form-control" placeholder="please enter number">
                      @if ($errors->has('employee_phone'))
                          <span class="text-danger">{{ $errors->first('employee_phone') }}</span>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="email">Employee Address</label>
                      <input type="text" name="employee_address" id="emp_address" class="form-control" placeholder="please enter address">
                      @if ($errors->has('employee_address'))
                          <span class="text-danger">{{ $errors->first('employee_address') }}</span>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="email">Employee Experience</label>
                      <input type="text" name="employee_experience" id="emp_experience" class="form-control" placeholder="please enter experience">
                      @if ($errors->has('employee_experience'))
                          <span class="text-danger">{{ $errors->first('employee_experience') }}</span>
                      @endif
                  </div>
                  <div class="form-group">
                      <label for="email">Employee Salary</label>
                      <input type="text" name="employee_salary" id="emp_salary" class="form-control" placeholder="please enter salary">
                      @if ($errors->has('employee_salary'))
                          <span class="text-danger">{{ $errors->first('employee_salary') }}</span>
                      @endif
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" id="u_submit" class="btn btn-primary" data-dismiss="modal">Update Now</button>
                  </div>
              </form>
            </div>

        </div>
    </div>
</div>
