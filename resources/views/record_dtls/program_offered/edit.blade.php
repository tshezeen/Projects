   
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="page-head-line">
                
                       <?php echo session('institute');?>
                          <small>
                              <i class="ace-icon fa fa-angle-double-right"></i>
                              Programme Offered of the year <?php echo session('year');?>
                          </small>
                    </h4>
                    <div class="panel panel-primary">
                    <div class="panel-heading"><label>
                   
                        Programmes Offered </label>
                  
                        </div>
                        <div class="addprogram">
                          @include('record_dtls.program_offered.create')
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="tbl">
                               <thead>
                                    <tr>
                                      <!--  <th>Sl.No</th> -->
                                      <th>id</th>
                                       <th>Programme </th>
                                       <th>Award Level</th>
                                       <th>Mode</th>
                                       <!-- <th>Affiliation </th> -->
                                       <th>Discipline </th>
                                       <th>Programme Tuition Fee per Annum in nu.</th>
                                       <!-- <th>Programme Duration </th> -->
                                       <th>Action</th>
                                       
                                    </tr>
                              </thead>

                                <tbody>
                               
                                 @foreach ($programList as $programList)
                                       <tr>
                                           <!-- <td>1</td> -->
                                         <td>{{$programList->id}}</td>
                                           <td>{{$programList->program_name}}</td>
                                           <td>{{$programList->award}}</td>
                                           <td>{{$programList->mode}}</td>  
                                          
                                           <td>{{$programList->category}}</td>  
                                           <td>{{$programList->program_fee}}</td>
                                         

                                         <!-- <php echo var_dump($programList->id);> -->
                                          <?php ?>
            
                                            <td> 
                                                <form class="row" method="POST" action="{{route('program.destroy',['id' => $programList->id])}}" onsubmit = "return confirm('Are you sure?')">
                                     
                                                  <input type="hidden" name="_method" value="DELETE">
                                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                   
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
                         </div><!-- end of panel-body -->
                 
                 </div>   

           
                </div>
            </div>
 
