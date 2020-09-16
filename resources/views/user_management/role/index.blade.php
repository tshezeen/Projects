@extends('user_management.role.base')
@section('action-content')
     <div class="row box-body">
      <div class="col-lg-12">
          <div class="panel panel-primary">

            <div class="panel-heading">
                Role 
              <div class="pull-right" id ="buttonTop">
                      <a href=" {{ route('role.create') }} "> <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus-square" ></i> Add  Role </button></a>
                        
                </div>
            </div>
         
          <!-- <div class="panel-heading"></div> -->
          <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                           <th>Sl.No</th>
                           <th> Role Name </th>
                           <th> Role Description </th>
                           <th>Action</th>
                          </tr>
                    </thead>

                      <tbody>

                        @foreach ($roleList as $roleList)

                                <tr role="row" class="odd"> 
                                 <td>{{ $roleList->id }}</td>
                                 <td>{{ $roleList->role_name }}</td>
                                 <td>{{ $roleList->role_desc }}</td>
                                <td>
                                  <form class="row" method="POST" action="{{ route('role.destroy',['id' => $roleList->id]) }}" onsubmit = "return confirm('Are you sure?')">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <a href="{{ route('role.edit',['id' => $roleList->id]) }}" class="btn btn-success col-sm-3 col-xs-5 btn-margin">
                                        Edit
                                        </a>
                                      <button type="submit" class="btn btn-danger col-sm-3 col-xs-5 btn-margin">
                                        Delete
                                      </button>
                                  </form>
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

   <!-- /.content -->
  </div>
@endsection