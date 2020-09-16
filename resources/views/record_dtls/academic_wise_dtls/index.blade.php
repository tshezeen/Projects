
     <div class="row">
      <div class="col-lg-12">
         <h4 class="page-head-line">
                
                 <?php echo session('institute');?>
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Academic Year-Wise Student Details of the year <?php echo session('year');?>
                    </small>
              </h4>
          <div class="panel panel-primary">
              <div class="panel-heading"><label>Academic Year-Wise Student Details</label>

                @yield('program-content')
               
          
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
                     
                       @foreach($academicYearWiseList as $academicYearWiseList)
                             <tr>
                                 <!-- <td>1</td> -->
                               
                                    <td>
                                        {{$academicYearWiseList->program}}
                                    </td>
                                     <td>
                                        {{$academicYearWiseList->academic_year}}
                                    </td>
                                    <td>
                                        {{$academicYearWiseList->male_RGoB}}
                                    </td>
                                    <td>
                                        {{$academicYearWiseList->female_RGoB}}
                                    </td>
                                    <td>
                                        {{$academicYearWiseList->total_RGoB}}
                                    </td>
                                    <td>
                                        {{$academicYearWiseList->male_self}}
                                    </td>
                                    <td >
                                        {{$academicYearWiseList->female_self}}
                                    </td>
                                    <td>
                                        {{$academicYearWiseList->total_self}}
                                    </td>
                                    <td>
                                        {{$academicYearWiseList->male_other}}
                                      </td>
                                    <td>
                                        {{$academicYearWiseList->female_other}}
                                      </td>
                                    <td>
                                        {{$academicYearWiseList->total_other}}
                                      </td>
                                    <td>      {{$academicYearWiseList->grand_total}}
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


