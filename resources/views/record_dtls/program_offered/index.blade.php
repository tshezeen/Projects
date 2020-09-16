   
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
                                       <th>Programme Tuition Fee per Annum in Nu.</th>
                                       <!-- <th>Programme Duration </th> -->
                                     </tr>
                                      
                                       
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
                                           <!-- <td>affilication</td> -->  
                                           <td>{{$programList->category}}</td>  
                                           <td>{{$programList->program_fee}}</td>
                                           
                                         <!-- <php echo var_dump($programList->id);> -->

                                      </tr>
                                  
                                  @endforeach
                                 </tbody>
                                 </table>
                              </div>
                         </div><!-- end of panel-body -->
                 
                 </div>   

           
                </div>
            </div>
 
