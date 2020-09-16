@extends('master.facility_type.base')
@section('action-content')
     <div class="row box-body">
      <div class="col-lg-12">
          <div class="panel panel-primary">

            <div class="panel-heading">
                Facility Type Master
              <div class="pull-right" id ="buttonTop">
                      <a href="{{ route('facility_type.create') }}"> <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus-square" ></i> Add Facility Type </button></a>
                        
                </div>
            </div>
         
          <!-- <div class="panel-heading"></div> -->
          <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                           <th>Sl.No</th>
                           <th>Facility Type</th>
                           <th>Action</th>
                          </tr>
                    </thead>

                      <tbody>
                        @foreach ($facilityList as $facilityList)
                             <tr role="row" class="odd">
                                 <td>{{ $facilityList->id }}</td>
                                 <td>{{ $facilityList->facility_type }}</td>
                                <td>
                                  <form class="row" method="POST" action="{{ route('facility_type.destroy', ['id' => $facilityList->id]) }}" onsubmit = "return confirm('Are you sure?')">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <a href="{{ route('facility_type.edit', ['id' => $facilityList->id]) }}" class="btn btn-success col-sm-3 col-xs-5 btn-margin">
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