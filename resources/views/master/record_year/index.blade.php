@extends('master.record_year.base')

@section('action-content')
     <div class="row box-body">
      <div class="col-lg-12">

          <div class="panel panel-primary">
 				<div class="pull-right" id ="buttonTop">
                      <a href="{{ route('record_year.create') }}"> <button type="button" class="btn btn-primary btn-md-5"><i class="fa fa-plus-square" ></i> Add New Record Year </button></a>
                        
                </div>
            <div class="panel-heading">
                Record Year Master
            </div>
         
          <!-- <div class="panel-heading"></div> -->
          <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                           <th>Record Id</th>
                           <th>Record Year</th>
                           <th>Is_Active</th>
                           <th>Action</th>
                          </tr>
                    </thead>
                   
                      <tbody>
                      	 @foreach ($recordYearDtls as $recordYearDtls)
                      	 	<tr>
                       			<td>{{ $recordYearDtls->id }}</td>
                            <td>{{ $recordYearDtls->record_year }}</td>
                            <td>{{ $recordYearDtls ->is_active}}</td>
                       	   		<td> 
                              
                       	   			 <form class="row" method="POST" action="" onsubmit = "return confirm('Are you sure?')">
                                      <input type="hidden" name="_method" value="DELETE">

                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                      @if($recordYearDtls ->is_active =='Y')
                                      
                                        <div id="deactivate">
                                           <a href="{{ route('record_year.edit', ['id' => $recordYearDtls->id])}}" class="btn btn-success col-sm-4 col-xs-5 btn-margin">
                                            Deactivate
                                            </a>

                                        </div>
                                        
                                      @else
                                      
                                        <div id="activate">
                                         <a href="{{ route('record_year.edit', ['id' => $recordYearDtls->id])}}" class="btn btn-success col-sm-4 col-xs-5 btn-margin">
                                          Activate
                                          </a>
                                        </div>
                                      
                                       @endif
                                      <button type="submit" class="btn btn-danger col-sm-3 col-xs-3 btn-margin">
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
<script src="{{ asset('vendor/adminlte/dist/js/jquery.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
      
     /*var is_active = $('#is_active').val();
      alert(is_active);*/
      
         /*if(is_active=='Y')
         {
          ('#activate').hide();
          ('#deactivate').show();
         }
         else
         {
          ('#deactivate').hide();
          ('#activate').show();
         }
*/
        
    });

 

    

function myFunction() {
 
}
</script>