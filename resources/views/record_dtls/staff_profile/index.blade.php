   
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="page-head-line">
                
                       <?php echo session('institute');?>
                          <small>
                              <i class="ace-icon fa fa-angle-double-right"></i>
                              Staff Profile of the year <?php echo session('year');?>
                          </small>
                    </h4>
                    <div class="panel panel-primary">
                    <div class="panel-heading"><label>
                   
                        Staff Profile </label>

                       </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="tbl">
                               <thead>
                                    <tr>
                                       <th>Title </th>
                                       <th>Name </th>
                                       <th>Designation</th>
                                       <th>Gender </th>
                                       <th>Qualification </th>
                                       <th>Date of Joining Present Post</th>
                                       <th>Years of Experiences </th>
                                       <th>Email</th>
                                       <th>Contact#</th>
                                      
                                       
                                    </tr>
                              </thead>

                                <tbody>
                               
                                 @foreach ($staffProfile as $staffProfile)
                                       <tr>
                                          <!-- <td>1</td> -->
                                          <td>{{$staffProfile->title}}</td>
                                           <td>{{$staffProfile->name}}</td>
                                           <td>{{$staffProfile->designation}}</td>
                                           <td>{{$staffProfile->gender}}</td>  
                                          
                                           <td>{{$staffProfile->qualification}}</td>  
                                           <td>{{$staffProfile->date_of_joining}}</td>
                                           <td>{{$staffProfile->yrs_of_exp}}</td>  
                                           <td>{{$staffProfile->email}}</td>
                                           <td>{{$staffProfile->contact_no}}</td>
                                           
                                          
                                      </tr>
                                  
                                  @endforeach
                                 </tbody>
                                 </table>
                              </div>
                         </div><!-- end of panel-body -->
                 
                 </div>   

           
                </div>
            </div>
 
