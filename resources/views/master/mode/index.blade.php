@extends('master.mode.base')
@section('action-content')
     <div class="row box-body">
      <div class="col-lg-12">
          <div class="panel panel-primary">

            <div class="panel-heading">
                Category Master
              <div class="pull-right" id ="buttonTop">
                      <a href="{{ route('mode.create') }}"> <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus-square" ></i> Add Mode </button></a>
                        
                </div>
            </div>
         
          <!-- <div class="panel-heading"></div> -->
          <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                           <th>Sl.No</th>
                           <th>Mode</th>
                           <th>Action</th>
                          </tr>
                    </thead>

                      <tbody>
                        @foreach ($modeList as $modeList)
                             <tr role="row" class="odd">
                                 <td>{{ $modeList->id }}</td>
                                 <td>{{ $modeList->mode }}</td>
                                <td>
                                  <form class="row" method="POST" action="{{ route('mode.destroy', ['id' => $modeList->id]) }}" onsubmit = "return confirm('Are you sure?')">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <a href="{{ route('mode.edit', ['id' => $modeList->id]) }}" class="btn btn-success col-sm-3 col-xs-5 btn-margin">
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

 
@endsection