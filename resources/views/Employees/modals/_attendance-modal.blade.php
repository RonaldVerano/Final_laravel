<!-- Modal -->
<div class="modal fade" id="attendance-modal-{{ $employees->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="{{ route('employees.update') }}" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">attendance</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="{{ route('employees.store') }}" method="post">
                 @csrf
                 <select class="form-control mb-2" name="present_days" placeholder="attendance"  }}>
                    
                        <option value="1">present</option> 
                        <option value="0">absent</option> 
                   
                 </select>
                 
                
                
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Employee</button>
      </div>
      </form>
    </div>
  </div>
</div>