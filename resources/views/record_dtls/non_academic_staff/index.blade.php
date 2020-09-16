
     <div class="row">
      <div class="col-lg-12">
        <h4 class="page-head-line">
                
                 <?php echo session('institute');?>
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Non Academic Staff of the year <?php echo session('year');?>
                    </small>
              </h4>
          <div class="panel panel-primary">
          <div class="panel-heading"><label>Non Academic Staff (Numbers)</label>

           
              </div>

              @foreach($nonAcademicStaffList as $nonAcademicStaffList)              
                
                  <div class="panel-body">
                    <label><font color="red">Number of individuals in each category</font></label>
                    <div class="row">
                        <div class="form-group"></div>   
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Male </label>

                            <div class="col-md-3">
                                <input id="male" type="numeric" class="form-control" name="male" value="{{$nonAcademicStaffList->male}}" disabled>

                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Female </label>

                                <div class="col-md-3">
                                  <input id="female" type="numeric" class="form-control" name="female" value="{{$nonAcademicStaffList->female}}" disabled>

                                </div>
                            </div>
                        </div>
                        </div><!-- end of panel-body -->
                       
                         
                            <div class="panel-heading">
                               <label>Qualification-wise</label>
                              
                             </div>
                             <div class="panel-body">
                                <div class="row">
                                  <div class="form-group"></div>   
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Doctorate</label>

                                      <div class="col-md-3">
                                          <input id="doctorate" type="numeric" class="form-control" name="doctorate" value="{{$nonAcademicStaffList->doctorate}}" disabled>

                                      </div>
                                  </div> 
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Master </label>

                                        <div class="col-md-3">
                                          <input id="master" type="numeric" class="form-control" name="master" value="{{$nonAcademicStaffList->master}}" disabled>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                               <div class="form-group"></div>  
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Bachelor</label>

                                      <div class="col-md-3">
                                          <input id="bachelor" type="numeric" class="form-control" name="bachelor" value="{{$nonAcademicStaffList->bachelor}}" disabled>

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                   
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Diploma </label>

                                        <div class="col-md-3">
                                          <input id="diploma" type="numeric" class="form-control" name="diploma" value="{{$nonAcademicStaffList->diploma}}" disabled>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group"></div>
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Certificate and below</label>

                                      <div class="col-md-3">
                                          <input id="certification_below" type="numeric" class="form-control" name="certification_below" value="{{$nonAcademicStaffList->certification_below}}" disabled>

                                      </div>
                                  </div>
                                 
                                </div>
                             </div><!-- end of Qualification panel -->
                            

                       

                        

                
               @endforeach
       
          </div><!-- end of pane-primary -->

 
      </div>
   </div>

 

            
          
           
         