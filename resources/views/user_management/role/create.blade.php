@extends('user_management.role.base')

@section('action-content')


 <div class="row box-body">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <div class="panel-heading">Add New Role </div>
                <div class="panel-body">
                   <form role="form" method="POST" action="{{ route('role.store') }}">
                        {{ csrf_field() }}

                      
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Role Name <font color="red">*</font></label>

                            <div class="col-md-3">
                                <input id="role_name" type="text" class="form-control" name="role_name"  required autofocus>

                            </div>
                        </div>
                          <div class="col-lg-1"></div>
                              <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Role Description<font color="red">*</font> </label>

                                <div class="col-md-3">
                                  <input id="role_desc" type="text" class="form-control" name="role_desc"  required autofocus>

                                 </div>
                            </div>
                        </div>
                        <br>
                      
                         <div class="row form-group">
                            <div class="col-md-8 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                                
                                <a href="{{ route('category.index') }}" class="btn btn-warning ">Cancel</a>

                            </div>
                          
                        </div>
                       
                    </form>


                </div>
           </div>

      </div>
   </div>

@endsection
