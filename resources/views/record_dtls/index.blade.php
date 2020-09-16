@extends('record_dtls.base')

@section('action-content')


   
   <div class="row box-body">
        <div class="col-lg-12">
          <?php
                      $user_session=session('role_name');
                    ?>
              
           <div class="table-responsive">
               <table class="table table-striped table-bordered table-hover" id="tbl">
                 <thead>
                      <tr>
                      <!--  <th>Sl.No</th> -->
                       <th>Institute Name</th>
                       <th>Record Year</th>
                       @if ($user_session =='dahe')
                          <th>Status </th>
                        @endif
                       
                       <th>Action</th>
                      </tr>
                </thead>
               
                  <tbody>
                   @foreach ($recordList as $recordList)
                      <tr>
                          <!-- <td></td> -->
                          <td>{{$recordList->institute}}</td>
                          <td>{{$recordList->year}}</td>
                          @if ($user_session =='dahe')
                          <td>{{$recordList->update_status}}</td>
                          @endif
                          <td> 
                             <form class="row" method="POST" action="">
                                  <input type="hidden" name="_method" value="DELETE">
                                  <input type="hidden" name="_method" value="PATCH">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                   <a href="{{ route('dashboard.show', ['year_id' => $recordList->record_yr,'inst_id' => $recordList->inst_id,'inst_name' => $recordList->institute,'year' => $recordList->year]) }}" class="btn btn-primary  btn-margin">
                                             View
                                      </a>
                                  @if($recordList->is_active =='Y')
                                  
                                    
                                      <a href="{{ route('dashboard.edit', ['year_id' => $recordList->record_yr,'inst_id' => $recordList->inst_id,'inst_name' => $recordList->institute,'year' => $recordList->year]) }}" class="btn btn-success  btn-margin">
                                             Edit
                                      </a>

                                      
                                   @endif
                                      

                                       
                                    
                                  
                                  
                              </form>
                          </td>
                        </tr> 
                    @endforeach
                   </tbody>

                   </table>
                </div>
          
        </div>
      </div>

@stop


