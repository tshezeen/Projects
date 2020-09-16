   
                <div class="row">
                  <div class="col-lg-12">
                    <h4 class="page-head-line">
                
                       <?php echo session('institute');?>
                          <small>
                              <i class="ace-icon fa fa-angle-double-right"></i>
                              Collaboration,Research and Publications(Completed) for the Year<?php echo session('year');?>
                          </small>
                    </h4>
                    <div class="panel panel-primary">
                    <div class="panel-heading"><label>
                   
                        Collaboration,Research and Publications(Completed)  </label>
                  
                        </div>
                        <div class="addprogram">
                          @include('record_dtls.collaboration.create')
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="tbl">
                               <thead>
                                    <tr>
                                      <!--  <th>Sl.No</th> -->
                                      <th>Collaboration/Research/Publication Type </th>
                                      <th>Collaboration/Research/Publication By</th>
                                      <th>Description</th>
                                      <th>Action</th>
                                    </tr>
                                   
                              </thead>

                                <tbody>
                               
                                 @foreach($collaboration as $collaboration)
                                        <tr>
                                           
                                          <td>{{$collaboration->collaboration}}</td>  
                                          <td>{{$collaboration->by}}</td>
                                          <td>{{$collaboration->description}}</td>
                                         
                                         
                                          
                                        
                                            <td> 
                                                <form class="row" method="POST" action="{{route('collaboration.destroy',['id' => $collaboration->id])}}" onsubmit = "return confirm('Are you sure?')">
                                     
                                                  <input type="hidden" name="_method" value="DELETE">
                                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                   
                                                  <button type="submit" class="btn btn-danger">
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
 
