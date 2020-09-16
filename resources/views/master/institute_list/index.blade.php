@extends('master.institute_list.base')
@section('action-content')
     <div class="row box-body">
      <div class="col-lg-12">
          <div class="panel panel-primary">

            <div class="panel-heading">
                Institute List Master
              <div class="pull-right" id ="buttonTop">
                      <a href="{{ route('institute_list.create') }}"> <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus-square" ></i> Add New Institute</button></a>
                        
                </div>
            </div>
         
          <!-- <div class="panel-heading"></div> -->
          <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                         <th>Sl.No</th>
                           <th>Institute Name</th>
                           <th>Institute Type</th>
                           <th>Location</th>
                           <th>Contact Address</th>
                          <!--  <th>Est Year</th>
                           <th>Total Acreage</th>
                           <th>National Accreditation</th>
                           <th>International Accreditation</th> -->
                           <th>Website</th>
                          <!-- <th>Description</th>-->
                           <th>Action</th>
                          </tr>
                    </thead>

                      <tbody>
                        @foreach ($instutiteLists as $instutiteLists)
                             <tr>
                                  <td>{{ $instutiteLists->id }}</td>
                                  <td>{{ $instutiteLists->inst_name }}</td>
                                  <td>{{ $instutiteLists->type }}</td>
                                  <td>{{ $instutiteLists->location }}</td>  
                                  <td>{{ $instutiteLists->address }}</td> 
                                  
                                  <td>{{ $instutiteLists->website }}</td>  
                                        
                                <td>
                                   <form class="row" method="POST" action="{{ route('institute_list.destroy', ['id' => $instutiteLists->id]) }}" onsubmit = "return confirm('Are you sure?')">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <a href="{{ route('institute_list.show', ['id' => $instutiteLists->id]) }}" class="btn btn-info   btn-margin">
                                        View
                                        </a>
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <a href="{{ route('institute_list.edit', ['id' => $instutiteLists->id]) }}" class="btn btn-success btn-margin">
                                        Edit
                                        </a>
                                      <button type="submit" class="btn btn-danger btn-margin">
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

  
@endsection