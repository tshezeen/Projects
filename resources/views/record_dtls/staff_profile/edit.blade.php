   
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="page-head-line">
                
                       <?php echo session('institute');?>
                          <small>
                              <i class="ace-icon fa fa-angle-double-right"></i>
                             Staff Details of the year <?php echo session('year');?>
                          </small>
                    </h4>
                    <div class="panel panel-primary">
                    <div class="panel-heading"><label>
                   
                        Staff Profile </label>
                  
                        </div>
                        <div class="addprogram">
                          @include('record_dtls.staff_profile.create')
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="tbl">
                               <thead>
                                    <tr>
                                      <!--  <th>Sl.No</th> -->
                                      <th>Title </th>
                                       <th>Name </th>
                                       <th>Designation</th>
                                       <th>Gender </th>
                                       <th>Qualification </th>
                                       <th>Date of Joining Present Post</th>
                                       <th>Years of Experiences </th>
                                       <th>Email</th>
                                       <th>Contact#</th>
                                       <th>Action</th>
                                       
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
                                         

                                         <!-- <php echo var_dump($staffProfile->id);> -->
                                          <?php ?>
            
                                            <td> 
                                                <form class="row" method="POST" action="{{route('program.destroy',['id' => $staffProfile->id])}}" onsubmit = "return confirm('Are you sure?')">
                                     
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
 
