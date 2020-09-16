
     <div class="row">
       
        <div class="col-lg-12">
          <h4 class="page-head-line">
                
                 <?php echo session('institute');?>
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Fee Structure of the year <?php echo session('year');?>
                    </small>
              </h4>
          @foreach($feeStructureList as $fess)
            <div class="panel panel-primary">
            <div class="panel-heading"><label>Fee Structure Per Person</label></div>

                 
                       <div class="panel-body">
                          <label><font color="red">Amounts in Nu.</font></label>
                        <div class="row">
                             <div class="form-group"></div>
                             
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Student Residence(Annual) </label>

                                  <div class="col-md-3">
                                      <input id="hostel" type="numeric" class="form-control" name="hostel" value="{{$fess->hostel}}" disabled>
                                      
                                  </div>
                              </div>
                              <div class="col-lg-1"></div>
                                  <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Meal(Annual)  </label>

                                  <div class="col-md-3">
                                     
                                      <input id="mess" type="numeric" class="form-control" name="mess" value="{{$fess->mess}}" disabled>
                                     
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                             <div class="form-group"></div>
                             
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Admission(One-Time) </label>

                                  <div class="col-md-3">
                                     <input id="admission" type="numeric" class="form-control" name="admission" value="{{$fess->admission}}" disabled>

                                    
                                  </div>
                              </div>
                              <div class="col-lg-1"></div>
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Registration </label>

                                  <div class="col-md-3">
                                      
                                       <input id="registration" type="numeric" class="form-control" name="registration" value="{{$fess->registration}}" disabled>

                                      
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                             <div class="form-group"></div>
                             
                              <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Library (Annual) </label>

                                <div class="col-md-3">
                                    <input id="library" type="numeric" class="form-control" name="library" value="{{$fess->library}}" disabled>
                                    
                                </div>
                            </div>
                              <div class="col-lg-1"></div>
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label"> Exam(Annual)</label>

                                  <div class="col-md-3">
                                      
                                      <input id="exam" type="numeric" class="form-control" name="exam" value="{{$fess->exam}}" disabled>
                                     
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                             <div class="form-group"></div>
                             
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Security Deposit (One-Time) </label>

                                  <div class="col-md-3">
                                      <input id="security_deposit" type="numeric" class="form-control" name="security_deposit" value="{{$fess->security_deposit}}" disabled>
                                      
                                  </div>
                              </div>
                              <div class="col-lg-1"></div>
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label"> Misellenaous(Annual)</label>

                                  <div class="col-md-3">
                                      
                                      <input id="miscellaneous" type="numeric" class="form-control" name="miscellaneous" value="{{$fess->miscellaneous}}" disabled>
                                     
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                             <div class="form-group"></div>
                             
                              <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Others (One-Time) if any</label>

                                <div class="col-md-3">
                                    <input id="others" type="numeric" class="form-control" name="others" value="{{$fess->others}}" disabled>
                                    
                                </div>
                            </div>
                             <div class="col-md-1"></div>
                                <div class="form-group">
                                      <label for="name" class="col-md-2 control-label"> Grand Total</label>

                                      <div class="col-md-3">
                                          
                                          <input id="fees_total" type="numeric" class="form-control" name="total"  disabled value=" {{$fess->total}}">

                                          <input id="fees_total" type="hidden" class="form-control" name="total" >
                                         
                                      </div>
                                  </div>
                                
                            </div>
                          </div><!-- end of panel-body -->
                      
         
            </div><!-- end of panel-primary -->
        @endforeach
   </div>
</div>
 


            
          
           
          