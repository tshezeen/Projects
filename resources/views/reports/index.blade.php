
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
            
                             
                          </tr>
                    </thead>

                      <tbody>
                     
                        @foreach($facilityList as $facilityList)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td>{{$facilityList->facility}}</td>
                                 <td>{{$facilityList->number}}</td>
                                 <td>{{$facilityList->capacity}}</td>  
                                
                            </tr>
                        
                        @endforeach
                       </tbody>
                       </table>
                    </div>
               </div><!-- end of panel-body -->
          
          </div>

 
      </div>
   </div>

 
