@extends('master.award_level.base')

@section('action-content')
     <div class="row box-body">
      <div class="col-lg-12">

          <div class="panel panel-primary">
 				<div class="pull-right" id ="buttonTop">
                      <a href="{{ route('award.create') }}"> <button type="button" class="btn btn-primary btn-md-5"><i class="fa fa-plus-square" ></i> Add Award Level</button></a>
                        
                </div>
            <div class="panel-heading">
                Award Level Master
            </div>
         
          <!-- <div class="panel-heading"></div> -->
          <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                           <th>Award Id</th>
                           <th>Award Level</th>
                           <th>Action</th>
                          </tr>
                    </thead>
                   
                      <tbody>
                      	 @foreach ($awardList as $award)
                      	 	<tr role="row" class="odd">
                       			<td>{{ $award->id }}</td>
                                <td>{{ $award->award }}</td>
                       	   		<td> 
                       	   			 <form class="row" method="POST" action="{{ route('award.destroy', ['id' => $award->id]) }}" onsubmit = "return confirm('Are you sure?')">
                                      <input type="hidden" name="_method" value="DELETE">
                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                       <a href="{{ route('award.edit', ['id' => $award->id]) }}" class="btn btn-success col-sm-3 col-xs-3 btn-margin">
                                        Edit
                                        </a>
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