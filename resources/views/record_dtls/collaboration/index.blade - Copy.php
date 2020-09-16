   
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="page-head-line">
                
                       <?php echo session('institute');?>
                          <small>
                              <i class="ace-icon fa fa-angle-double-right"></i>
                              Collaborations, Research and Publications of the year <?php echo session('year');?>
                          </small>
                    </h4>
                    <div class="panel panel-primary">
                    <div class="panel-heading"><label>
                   
                        Collaborations(Completed in the current year) </label>

                       </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="tbl">
                               <thead>
                                    <tr>
                                     
                                      
                                      <th> Collaboration </th>
                                    
                                      <th>Description</th>
                                    </tr>
                                  
                              </thead>

                                <tbody>
                               
                                @foreach($collaboration as $collaboration)
                                     
                                         
                                      
                                       <tr>
                                           
                                           <td>{{$collaboration->collaboration}}</td>  
                                           
                                          <td>{{$collaboration->description}}</td>
                                         
                                      </tr>
                                  
                                 @endforeach
                                 </tbody>
                                 </table>
                              </div>
                         </div><!-- end of panel-body -->
                         <div class="panel-heading"><label>
                   
                        Inovation/Research/Publications (Completed in the current year) </label>

                       </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="tbl">
                               <thead>
                                    <tr>
                                    
                                      <th> Innovation/Research/Publication </th>
                                      <th>Lead</th>
                                      <th>Description</th>
                                    </tr>
                                  
                              </thead>

                                <tbody>
                               
                                @foreach($collaboration as $collaboration)
                                     
                                    
                                       <tr>
                                           
                                           <td>{{$collaboration->collaboration}}</td>  
                                           <td>{{$collaboration->by}}</td>
                                          <td>{{$collaboration->description}}</td>
                                         
                                      </tr>
                                  
                                 @endforeach
                                 </tbody>
                                 </table>
                              </div>
                         </div><!-- end of panel-body -->
                 
                 </div>   

           
                </div>
            </div>
 
