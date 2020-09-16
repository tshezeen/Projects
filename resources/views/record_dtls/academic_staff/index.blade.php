
     <div class="row">
      <div class="col-lg-12">
          <h4 class="page-head-line">
                
                 <?php echo session('institute');?>
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Academic Staff of the year <?php echo session('year');?>
                    </small>
              </h4>
        <form  role="form" method="POST" action="">
          <div class="panel panel-primary">
          <div class="panel-heading"><label>Academic Staff (Numbers)</label>

            

              </div>

              @foreach($academicStaffList as $academicStaffList)
                
                <div class="panel-body">
                    <label><font color="red">Number of individuals in each category</font></label>
                    <div class="row">
                        <div class="form-group"></div>   
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Male </label>

                            <div class="col-md-3">
                                <input id="male" type="numeric" class="form-control" name="male" value="{{$academicStaffList->male}}" disabled>

                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Female </label>

                                <div class="col-md-3">
                                  <input id="female" type="numeric" class="form-control" name="female" value="{{$academicStaffList->female}}" disabled>

                                </div>
                            </div>
                        </div>
                        </div><!-- end of panel-body -->
                        
                           <div class="panel-heading">
                              <div class="row">

                                <div class="col-lg-6">
                                  <label>Bhutnaese</label>
                                </div>
                                <div class="col-lg-6">
                                  <label>International</label>
                                </div>
                              </div>

                           </div>
                           <div class="panel-body">
                              <div class="row">
                                <div class="form-group"></div>   
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Contract </label>

                                    <div class="col-md-3">
                                        <input id="bhutanese_contract" type="numeric" class="form-control" name="bhutanese_contract" value="{{$academicStaffList->bhutanese_contract}}" disabled>

                                    </div>
                                </div>
                                <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Contract </label>

                                    <div class="col-md-3">
                                        <input id="international_contract" type="numeric" class="form-control" name="international_contract" value="{{$academicStaffList->international_contract}}" disabled>

                                    </div>
                                </div>
                              </div>
                              <div class="row">
                               <div class="form-group"></div> 
                                <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Regular </label>

                                      <div class="col-md-3">
                                        <input id="bhutanese_regular" type="numeric" class="form-control" name="bhutanese_regular" value="{{$academicStaffList->bhutanese_regular}}"disabled>

                                      </div>
                                  </div>
                             
                                
                                <div class="col-lg-1"></div>
                                  <div class="form-group">
                                    <label for="name" class="col-md-2 control-label">Regular </label>

                                      <div class="col-md-3">
                                        <input id="international_regular" type="numeric" class="form-control" name="international_regular" value="{{$academicStaffList->international_regular}}" disabled>

                                      </div>
                                  </div>
                              </div>
                            </div><!-- end of bhutanese and international panel -->
                             <div class="panel-heading">
                               <label>Age Group Wise</label>
                              
                             </div>
                             <div class="panel-body">
                                <div class="row">
                                  <div class="form-group"></div>   
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Below 30 yrs </label>

                                      <div class="col-md-3">
                                          <input id="age_below_30yrs" type="numeric" class="form-control" name="age_below_30yrs" value="{{$academicStaffList->age_below_30yrs}}" disabled>

                                      </div>
                                  </div> 
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Between 30-45 yrs </label>

                                        <div class="col-md-3">
                                          <input id="age_31_45yrs" type="numeric" class="form-control" name="age_31_45yrs" value="{{$academicStaffList->age_31_45yrs}}" disabled>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group"></div> 
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Between 46-60 yrs </label>

                                      <div class="col-md-3">
                                          <input id="age_46_60yrs" type="numeric" class="form-control" name="age_46_60yrs" value="{{$academicStaffList->age_46_60yrs}}" disabled>

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">61 yrs or above </label>

                                        <div class="col-md-3">
                                          <input id="age_above_61yrs" type="numeric" class="form-control" name="age_above_61yrs" value="{{$academicStaffList->age_above_61yrs}}"
                                          disabled>

                                        </div>
                                    </div>
                                </div>
                             </div><!-- end of age group panel -->
                             <div class="panel-heading">
                               <label>Qualification-wise</label>
                              
                             </div>
                             <div class="panel-body">
                                <div class="row">
                                  <div class="form-group"></div>   
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Doctorate </label>

                                      <div class="col-md-3">
                                          <input id="doctorate" type="numeric" class="form-control" name="doctorate" value="{{$academicStaffList->doctorate}}" disabled>

                                      </div>
                                  </div> 
                                  <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Master </label>

                                        <div class="col-md-3">
                                          <input id="master" type="numeric" class="form-control" name="master" value="{{$academicStaffList->master}}" disabled>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                               <div class="form-group"></div>  
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Bachelor</label>

                                      <div class="col-md-3">
                                          <input id="bachelor" type="numeric" class="form-control" name="bachelor" value="{{$academicStaffList->bachelor}}" disabled>

                                      </div>
                                  </div>
                                  <div class="col-lg-1"></div>
                                   
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">Diploma </label>

                                        <div class="col-md-3">
                                          <input id="diploma" type="numeric" class="form-control" name="diploma" value="{{$academicStaffList->diploma}}" disabled>

                                        </div>
                                    </div>
                                </div>
                             </div><!-- end of Qualification panel -->
                             <div class="panel-heading">
                               <label>Years of Teaching Experience-wise</label>
                              
                             </div>
                             <div class="panel-body">
                                <div class="row">
                                  <div class="form-group"></div>   
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">5 years or less</label>

                                      <div class="col-md-3">
                                          <input id="exp_6yrs_below" type="numeric" class="form-control" name="exp_6yrs_below" value="{{$academicStaffList->exp_6yrs_below}}" disabled>

                                      </div>
                                  </div>
                                   
                                  <div class="col-lg-1"></div>
                                  <div class="form-group"></div>   
                                    <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">6 to 10 years </label>

                                        <div class="col-md-3">
                                          <input id="exp_6_10yrs" type="numeric" class="form-control" name="exp_6_10yrs" value="{{$academicStaffList->exp_6_10yrs}}" disabled>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="form-group"></div>   
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label">11 years or more</label>

                                      <div class="col-md-3">
                                          <input id="exp_10yrs_above" type="numeric" class="form-control" name="exp_10yrs_above" value="{{$academicStaffList->exp_10yrs_above}}" disabled>

                                      </div>
                                  </div>
                                  
                                </div>
                             </div><!-- end of teaching experience panel -->

                 
               
          @endforeach
          </div><!-- end of panel-primary -->

      </form>
      </div>
   </div>

 


            
          
           
         