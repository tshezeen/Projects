
     <div class="row">
      <div class="col-lg-12">
        <h4 class="page-head-line">
                
                 <?php echo session('institute');?>
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Facilities of the year <?php echo session('year');?>
                    </small>
              </h4>
          <div class="panel panel-primary">
          <div class="panel-heading"><label>Facilities  </label>

           
          <!-- <div class="pull-right" id ="buttonTop">
              <a href=""> <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus-square" ></i> Add New Facility</button></a>
                        
                </div> -->
              </div>
              <div class="addprogram">
                 @include('record_dtls.facilities.create')
            </div>
            
            <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                             <!-- <th>Sl.No</th> -->
                             <th>Facility </th>
                             <th>Number</th>
                             <th>Capacity</th>
                             <th>Action</th>
                          </tr>
                    </thead>

                      <tbody>
                     
                        @foreach($facilityList as $facilityList)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td>{{$facilityList->facility}}</td>
                                 <td>{{$facilityList->number}}</td>
                                 <td>{{$facilityList->capacity}}</td>  
                                
                                     <td> 
                                            <form class="row" method="POST" action="{{route('facilities.destroy',['id' => $facilityList->id])}}" onsubmit = "return confirm('Are you sure?')">
                                     
                                                  <input type="hidden" name="_method" value="DELETE">
                                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                   
                                                  <button type="submit" class="btn btn-danger col-sm-7 btn-margin">
                                                    Delete
                                                  </button>
                                                </form>
                                              </td>
                                  
                                
                            </tr>
                         @endforeach
                      
                       </tbody>
                       </table>
                    </div>
               </div><!-- end of panel-body -->
           
          </div>

 
      </div>
   </div>

 
