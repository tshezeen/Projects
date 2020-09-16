@extends('reports.base')

@section('action-content')
     <div class="row box-body">
     <div class="row">
      <div class="col-lg-12">
         
          <div class="panel panel-primary">
          <div class="panel-heading"><label>Total Intake Capacity at Tertiary Level With Source of Funding</label>
            <div class="pull-right" id ="buttonTop">
                      <a href="{{url('report/enrolled_pdf')}}"> <button type="button" class="btn btn-primary btn-md-5"><i class="fa fa-file-pdf" ></i> Download PDF</button></a>
                        
                </div>

          </div>
            
            <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                           
                            <th rowspan="2" style="vertical-align:middle">Name of Institute/College</th>
                            
                            <th colspan="3" style="text-align:center">RGoB Funded Students</th>
                            <th colspan="3" style="text-align:center">Self Funded Students</th>
                            <th colspan="3" style="text-align:center">Other Funded Students</th>
                            <th colspan="3" style="text-align:center">Grand Total</th>
                            
                          </tr>
                          <tr> 
                              <th style="text-align:center"> Male</th>
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
                              <th style="text-align:center">Total</th>
                               <th style="text-align:center">Male</th>
                               <th style="text-align:center">Female</th>
                              <th style="text-align:center">Total</th>
                              <th style="text-align:center">Male</th>
                               <th style="text-align:center">Female</th>
                              <th style="text-align:center">Total</th>
                          </tr>
                    </thead>

                      <tbody>
                     
                        @foreach($totalIntakeCapacityList as $totalIntakeCapacityList)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td>{{$totalIntakeCapacityList->institute}}</td>
                                 <td>{{$totalIntakeCapacityList->male_RGoB}}</td>
                                 <td>{{$totalIntakeCapacityList->female_RGoB}}</td>
                                 <td>{{$totalIntakeCapacityList->total_RGoB}}</td>
                                 <td>{{$totalIntakeCapacityList->male_self}}</td>
                                 <td>{{$totalIntakeCapacityList->female_self}}</td>
                                 <td>{{$totalIntakeCapacityList->total_self}}</td>
                                 <td>{{$totalIntakeCapacityList->male_other}}</td>
                                 <td>{{$totalIntakeCapacityList->female_other}}</td>
                                 <td>{{$totalIntakeCapacityList->total_other}}</td>
                                 <td>{{$totalIntakeCapacityList->male_grand}}</td>
                                 <td>{{$totalIntakeCapacityList->female_grand}}</td>
                                 <td>{{$totalIntakeCapacityList->grand_total}}</td>
                                
                            </tr>
                        
                        @endforeach
                       </tbody>
                       </table>
                    </div>
               </div><!-- end of panel-body -->
          
          </div>

 
      </div>
   </div>

 @endsection
