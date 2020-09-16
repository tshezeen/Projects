@extends('user_management.users.base')
@section('action-content')
     <div class="row box-body">
      <div class="col-lg-12">
          <div class="panel panel-primary">

            <div class="panel-heading">
                User
              <div class="pull-right" id ="buttonTop">
                      <a href="{{ route('users.create') }}"> <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus-square" ></i> Add  user </button></a>
                        
                </div>
            </div>
         
          <!-- <div class="panel-heading"></div> -->
          <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                           
                           <th> Name </th>
                           <th> Designation </th>
                           <th> User Name </th>
                           <th> Role </th>
                           <th> Institution </th>
                           <th> Action</th>
                          </tr>
                    </thead>

                      <tbody>
                          @foreach ($userList as $userList)
                            <tr role="row" class="odd"> 
                                
                                 <td>{{ $userList->name }}</td>
                                 <td>{{ $userList->designation }}</td>
                                 <td>{{ $userList->uname }}</td>
                                 <td>{{ $userList->role_name }}</td>
                                 <td>{{ $userList->inst_name }}</td>
                                 
                                <td>
                                  <form class="row" method="POST" action="{{ route('users.destroy',['id' => $userList->id]) }}" onsubmit = "return confirm('Are you sure?')">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      
                                       <a href="{{ route('users.edit',['id' => $userList->id]) }}" class="btn btn-success  btn-margin">
                                        Edit
                                        </a>
                                        <button type="submit" class="btn btn-danger  btn-margin">
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