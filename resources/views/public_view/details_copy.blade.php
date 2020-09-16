    <!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
<link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>



<style>
  .page-head-line {
    padding-bottom: 20px;
    border-bottom: 2px solid #34495e;
    color: #064CA7;
    font-size: 20px;
    margin-bottom: 40px;
    margin-top: 30px;
}
 </style>
 <script>

$(document).ready(function() {
    $('#instDls').DataTable();
} );

</script>
<div class="container">
 <div class="row">
        <div class="col-lg-12">
            <img src="{{url('/img/tess-logo.png')}}" width="100%" height="20%">
        </div>
 </div>   
     
 <div class="row">
          <div class="col-md-12 col-lg-12">
               <h4 class="page-head-line">
                
                       <?php echo session('institute');?>
                          <small>
                              <i class="ace-icon fa fa-angle-double-right"></i>
                              Details as of <?php echo session('year');?>
                          </small>
                    </h4>
          </div>
      </div>
     
         
        
        <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#instDtl" data-toggle="tab">Institute Details</a></li>
                <li><a href="#po" data-toggle="tab">Programmes Offered</a></li>
                <li><a href="#fees" data-toggle="tab">Fee Structures</a></li>
                <li><a href="#as" data-toggle="tab">Academic Staff</a></li>
                <li><a href="#ns" data-toggle="tab">Non-Academic Staff</a></li>
                <li><a href="#facilities" data-toggle="tab">Facilities</a></li>
                
                <li><a href="#acastd" data-toggle="tab">Academic Wise Stds</a></li>
                <li><a href="#bulkstd" data-toggle="tab">Bulk Stds</a></li>
                   
          </ul>

          <div class="tab-content">
            <div id="instDtl" class="tab-pane fade in active">
          
                
                  
  
            </div>
            <div id="po" class="tab-pane fade">
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
                                       <th>Programme Tuition Fee per Annum</th>
                                    
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
                                          
                                      </tr>
                                  
                                  @endforeach
                                 </tbody>
                                 </table>
                              </div>
                         </div><!-- end of panel-body -->
                 
                 </div>  
                  
      
              </div> 
             <div id="fees" class="tab-pane fade">
                
                   @foreach($feeStructureList as $fess)
                      <div class="panel panel-primary">
                      <div class="panel-heading"><label>Fee Structure</label></div>

                           
                                 <div class="panel-body">
                                    <label><font color="red">Amounts in Nu.</font></label>
                                  <div class="row">
                                       <div class="form-group"></div>
                                       
                                        <div class="form-group">
                                            <label for="name" class="col-md-2 control-label">Hostel(Annual) </label>

                                            <div class="col-md-3">
                                                <input id="hostel" type="numeric" class="form-control" name="hostel" value="{{$fess->hostel}}" disabled>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                            <div class="form-group">
                                            <label for="name" class="col-md-2 control-label">Mess(Annual)  </label>

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
                                          
                                      </div>
                                    </div><!-- end of panel-body -->
                                
                   
                      </div><!-- end of panel-primary -->
                  @endforeach
      
              </div>  

               <div id="as" class="tab-pane fade">
                
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
                                            <label for="name" class="col-md-2 control-label">Doctorate (PhD.MD,etc..)</label>

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
                                     
                                        <div class="form-group">
                                            <label for="name" class="col-md-2 control-label">Bachelor</label>

                                            <div class="col-md-3">
                                                <input id="bacherlor" type="numeric" class="form-control" name="bacherlor" value="{{$academicStaffList->bacherlor}}" disabled>

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
                                                <input id="exp_6yrs_below" type="numeric" class="form-control" name="exp_6yrs_below" value="{{$academicStaffList->exp_6yrs_below}}">

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
                
              </div>
              <div id="ns" class="tab-pane fade">
                
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
                                          <label for="name" class="col-md-2 control-label">Doctorate (PhD.MD,etc..)</label>

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
                                   
                                      <div class="form-group">
                                          <label for="name" class="col-md-2 control-label">Bachelor</label>

                                          <div class="col-md-3">
                                              <input id="bacherlor" type="numeric" class="form-control" name="bacherlor" value="{{$nonAcademicStaffList->bacherlor}}" disabled>

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
              <div id="facilities" class="tab-pane fade">
                
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

             

              <div id="acastd" class="tab-pane fade">
                
                    <div class="panel panel-primary">
                        <div class="panel-heading"><label>Academic Year-Wise Student Details</label>

                          @yield('program-content')
                          @foreach($academicYearWiseList as $academicYearWiseList)
                    
                        </div>

                        <div class="panel-body">
                        <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="tbl">
                               <thead>
                                    <tr>
                                      <!-- <th rowspan="2" style="vertical-align:middle">Sl.No</th> -->
                                      <th rowspan="2" style="vertical-align:middle">Programme</th>
                                      <th rowspan="2" style="vertical-align:middle">Year</th>
                                      <th colspan="3" style="text-align:center">RGoB Funded Students</th>
                                      <th colspan="3" style="text-align:center">Self Funded Students</th>
                                      <th colspan="3" style="text-align:center">Other Funded Students</th>
                                      <th rowspan="2" style="vertical-align:middle; text-align:center">Grand Total</th>
                                       <!-- <th rowspan="2" style="vertical-align:middle">Action</th> -->
                                    </tr>
                                    <tr> 
                                        <th style="text-align:center">
                                            Male
                                        </th>
                                         <th style="text-align:center">
                                            Female
                                        </th>
                                        <th style="text-align:center">
                                            Total
                                        </th>
                                        <th style="text-align:center">
                                            Male
                                        </th>
                                        <th style="text-align:center">
                                            Female
                                        </th>
                                        <th style="text-align:center">
                                            Total
                                        </th>
                                        <th style="text-align:center">
                                            Male
                                        </th>
                                        <th style="text-align:center">
                                            Female
                                        </th>
                                        <th style="text-align:center">
                                            Total
                                        </th>
                                    </tr>
                                  
                              </thead>

                                <tbody>
                               
                                 
                                       <tr>
                                           <!-- <td>1</td> -->
                                         
                                              <td>
                                                  {{$academicYearWiseList->program}}
                                              </td>
                                               <td>
                                                  {{$academicYearWiseList->academic_year}}
                                              </td>
                                              <td style="text-align:center">
                                                  {{$academicYearWiseList->male_RGoB}}
                                              </td>
                                              <td style="text-align:center">
                                                  {{$academicYearWiseList->female_RGoB}}
                                              </td>
                                              <td style="text-align:center">
                                                  {{$academicYearWiseList->total_RGoB}}
                                              </td>
                                              <td style="text-align:center">
                                                  {{$academicYearWiseList->male_self}}
                                              </td>
                                              <td style="text-align:center">
                                                  {{$academicYearWiseList->female_self}}
                                              </td>
                                              <td style="text-align:center">
                                                  {{$academicYearWiseList->total_self}}
                                              </td>
                                              <td style="text-align:center">
                                                  {{$academicYearWiseList->male_other}}
                                                </td>
                                              <td style="text-align:center">
                                                  {{$academicYearWiseList->female_other}}
                                                </td>
                                              <td style="text-align:center">
                                                  {{$academicYearWiseList->total_other}}
                                                </td>
                                              <td style="text-align:center">      {{$academicYearWiseList->grand_total}}
                                              </td>
             
                                           
                                             
                                      </tr>
                                  
                                
                                 </tbody>
                                 </table>
                              </div>
                         </div><!-- end of panel-body -->
                    @endforeach
                    </div>
                
              </div>

              <div id="bulkstd" class="tab-pane fade">
                
                   <div class="panel panel-primary">
                          <div class="panel-heading"><label>Bulk Student Details (Numbers)</label>

                          </div>
s
                              @foreach($bulkStdList as $bulkStdList)
                              
                              <div class="panel-body">
                                <label><font color="red">Number of individuals in each category.<br>
                                For students with mixed funding students are categorized bt which funding source provides the greatest portion of their support.</font></label>
                                  <div class="row">
                                         
                                      <div class="form-group">
                                          <label for="name" class="col-md-2 control-label">RGoB Funded Students </label>

                                          <div class="col-md-3">
                                              <input id="RGoB_funded" type="numeric" class="form-control" name="RGoB_funded" value="{{$bulkStdList->RGoB_funded}}" disbaled>

                                          </div>
                                      </div>
                                          <div class="col-lg-1"></div>
                                              <div class="form-group">
                                                <label for="name" class="col-md-2 control-label">Other Funded Students </label>

                                              <div class="col-md-3">
                                                <input id="other_funded" type="numeric" class="form-control" name="other_funded" value="{{$bulkStdList->other_funded}}" disbaled>

                                              </div>
                                          </div>
                                      </div>
                                      <div class="row">
                                       
                                      <div class="form-group">
                                          <label for="name" class="col-md-2 control-label">Self Funded Students </label>

                                          <div class="col-md-3">
                                              <input id="self_funded" type="numeric" class="form-control" name="self_funded" value="{{$bulkStdList->self_funded}}" disbaled>

                                          </div>
                                      </div>
                                          <div class="col-lg-1"></div>
                                              <div class="form-group">
                                                <label for="name" class="col-md-2 control-label">Females</label>

                                              <div class="col-md-3">
                                                <input id="female" type="numeric" class="form-control" name="female" value="{{$bulkStdList->female}}" disbaled>

                                              </div>
                                          </div>
                                      </div>
                                       <div class="row">
                                       
                                        <div class="form-group">
                                            <label for="name" class="col-md-2 control-label">Males </label>

                                            <div class="col-md-3">
                                                <input id="male" type="numeric" class="form-control" name="male" value="{{$bulkStdList->male}}" disbaled>

                                            </div>
                                        </div>
                                            <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Total Students</label>

                                                <div class="col-md-3">
                                                  <input id="total" type="numeric" class="form-control" name="total" value="{{$bulkStdList->total}}" disbaled>

                                                </div>
                                            </div>
                                        </div>
                        
                                         <div class="row">
                                       
                                          <div class="form-group">
                                              <label for="name" class="col-md-2 control-label">Boarders  </label>

                                              <div class="col-md-3">
                                                  <input id="boarders" type="numeric" class="form-control" name="boarders" value="{{$bulkStdList->boarders}}" disbaled>

                                              </div>
                                          </div>
                                            <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Day Scholars</label>

                                                <div class="col-md-3">
                                                  <input id="dayscholars" type="numeric" class="form-control" name="dayscholars" value="{{$bulkStdList->dayscholars}}" disbaled>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end of panel-body -->
                                    
                                       <div class="panel-heading">
                                         <label>Age Group-wise</label>
                                       </div>
                                       <div class="panel-body">
                                          <div class="row">
                                            <div class="form-group">
                                                <label for="name" class="col-md-2 control-label">18 yrs or below </label>

                                                <div class="col-md-3">
                                                    <input id="below_19yrs" type="numeric" class="form-control" name="below_19yrs" value="{{$bulkStdList->below_19yrs}}" disbaled>

                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                              <div class="form-group">
                                                <label for="name" class="col-md-2 control-label">Age between 19-23yrs </label>

                                                  <div class="col-md-3">
                                                    <input id="btw_19_23yrs" type="numeric" class="form-control" name="btw_19_23yrs" value="{{$bulkStdList->btw_19_23yrs}}" disbaled>

                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                         
                                            <div class="form-group">
                                                <label for="name" class="col-md-2 control-label">24 yrs or above </label>

                                                <div class="col-md-3">
                                                    <input id="above_23yrs" type="numeric" class="form-control" name="above_23yrs" value="{{$bulkStdList->above_23yrs}}" disbaled>

                                                </div>
                                            </div>
                                            
                                          </div>
                                        </div><!-- end of age group wise  -->

                                        
                                         
                                         <div class="panel-heading">
                                           <label>Dzongkhag-wise</label>
                                          
                                         </div>
                                         <div class="panel-body">
                                            <div class="row">
                                              <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Bumthang</label>

                                                  <div class="col-md-3">
                                                      <input id="bumthang" type="numeric" class="form-control" name="bumthang" value="{{$bulkStdList->bumthang}}" disbaled>

                                                  </div>
                                              </div>
                                              <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Chhukha </label>

                                                    <div class="col-md-3">
                                                      <input id="chhukha" type="numeric" class="form-control" name="chhukha" value="{{$bulkStdList->chhukha}}" disbaled>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                           
                                              <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Dagana</label>

                                                  <div class="col-md-3">
                                                      <input id="dagana" type="numeric" class="form-control" name="dagana" value="{{$bulkStdList->dagana}}" disbaled>

                                                  </div>
                                              </div>
                                              <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Gasa </label>

                                                    <div class="col-md-3">
                                                      <input id="gasa" type="numeric" class="form-control" name="gasa" value="{{$bulkStdList->gasa}}" disbaled>

                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                           
                                              <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Haa</label>

                                                  <div class="col-md-3">
                                                      <input id="haa" type="numeric" class="form-control" name="haa" value="{{$bulkStdList->haa}}" disbaled>

                                                  </div>
                                              </div>
                                              <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Lhuntse </label>

                                                    <div class="col-md-3">
                                                      <input id="lhuntse" type="numeric" class="form-control" name="lhuntse" value="{{$bulkStdList->lhuntse}}" disbaled>

                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                           
                                              <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Mongar</label>

                                                  <div class="col-md-3">
                                                      <input id="mongar" type="numeric" class="form-control" name="mongar" value="{{$bulkStdList->mongar}}" disbaled>

                                                  </div>
                                              </div>
                                              <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Paro </label>

                                                    <div class="col-md-3">
                                                      <input id="paro" type="numeric" class="form-control" name="paro" value="{{$bulkStdList->paro}}" disbaled>

                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                           
                                              <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Pemagatshel</label>

                                                  <div class="col-md-3">
                                                      <input id="pemagatshel" type="numeric" class="form-control" name="pemagatshel" value="{{$bulkStdList->pemagatshel}}" disbaled>

                                                  </div>
                                              </div>
                                              <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Punakha </label>

                                                    <div class="col-md-3">
                                                      <input id="punakha" type="numeric" class="form-control" name="punakha" value="{{$bulkStdList->punakha}}" disbaled>

                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                           
                                              <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Samdrupjongkhar</label>

                                                  <div class="col-md-3">
                                                      <input id="samdrupjongkhar" type="numeric" class="form-control" name="samdrupjongkhar" value="{{$bulkStdList->samdrupjongkhar}}" disbaled>

                                                  </div>
                                              </div>
                                              <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Samtse </label>

                                                    <div class="col-md-3">
                                                      <input id="samtse" type="numeric" class="form-control" name="samtse" value="{{$bulkStdList->samtse}}" disbaled>

                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                           
                                              <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Sarpang</label>

                                                  <div class="col-md-3">
                                                      <input id="sarpang" type="numeric" class="form-control" name="sarpang" value="{{$bulkStdList->sarpang}}" disbaled>

                                                  </div>
                                              </div>
                                              <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Trashi Yangtse </label>

                                                    <div class="col-md-3">
                                                      <input id="tashiyangtse" type="numeric" class="form-control" name="tashiyangtse" value="{{$bulkStdList->tashiyangtse}}" disbaled>

                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                           
                                              <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Thimphu</label>

                                                  <div class="col-md-3">
                                                      <input id="thimphu" type="numeric" class="form-control" name="thimphu" value="{{$bulkStdList->thimphu}}" disbaled>

                                                  </div>
                                              </div>
                                              <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Trashigang </label>

                                                    <div class="col-md-3">
                                                      <input id="trashigang" type="numeric" class="form-control" name="trashigang" value="{{$bulkStdList->trashigang}}" disbaled>

                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                           
                                              <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Trongsa</label>

                                                  <div class="col-md-3">
                                                      <input id="trongsa" type="numeric" class="form-control" name="trongsa" value="{{$bulkStdList->trongsa}}" disbaled>

                                                  </div>
                                              </div>
                                              <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Tsirang </label>

                                                    <div class="col-md-3">
                                                      <input id="tsirang" type="numeric" class="form-control" name="tsirang" value="{{$bulkStdList->tsirang}}" disbaled>

                                                    </div>
                                                </div>
                                            </div>
                                             <div class="row">
                                           
                                              <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Wangdue Phodrang</label>

                                                  <div class="col-md-3">
                                                      <input id="wangdi" type="numeric" class="form-control" name="wangdi" value="{{$bulkStdList->wangdi}}" disbaled>

                                                  </div>
                                              </div>
                                              <div class="col-lg-1"></div>
                                                <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">Zhemgang </label>

                                                    <div class="col-md-3">
                                                      <input id="zhemgang" type="numeric" class="form-control" name="zhemgang" value="{{$bulkStdList->zhemgang}}" disbaled>

                                                    </div>
                                                </div>
                                            </div>
                                             
                                         </div><!-- end of Qualification panel -->
                                         <div class="panel-heading">
                                           <label>Number of International Students</label>
                                          
                                         </div>
                                         <div class="panel-body">
                                            <div class="row">
                                              <div class="form-group">
                                                  <label for="name" class="col-md-2 control-label">International Students</label>

                                                  <div class="col-md-3">
                                                      <input id="male" type="numeric" class="form-control" name="international_stds" value="{{$bulkStdList->international_stds}}" disbaled>

                                                  </div>
                                              </div>
                                             
                                            </div>
                                           
                                         </div><!-- end of teaching experience panel -->

                                  
                           @endforeach
                   
                      </div><!-- end of pane-primary -->
                
              </div>

            

          </div><!-- end of tab -->
       
 
      </div>
   </div>
</div>
 









