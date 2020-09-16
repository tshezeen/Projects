@extends('reports.base')

@section('action-content')
     <div class="row box-body">
     <div class="row">
      <div class="col-lg-12">
         
          <div class="panel panel-primary">
          <div class="panel-heading"><label>Year and Programme Level(in country)  </label>
             <div class="pull-right" id ="buttonTop">
                      <a href="{{url('report/year_programme_pdf')}}"> <button type="button" class="btn btn-primary btn-md-5"><i class="fa fa-file-pdf" ></i> Download PDF</button></a>
                        
                </div>

          </div>
            
            <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                             
                            <th rowspan="2" style="vertical-align:middle">Year </th>
                            
                            <th colspan="3" style="text-align:center">RGoB Funded Students</th>
                            <th colspan="3" style="text-align:center">Self Funded Students</th>
                            <th colspan="3" style="text-align:center">Other Funded Students</th>
                            <th colspan="3" style="text-align:center">Grand Total</
            
                             
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
                     
                        @foreach($yearProgrammeStatistics as $yearProgrammeStatistics)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td>{{$yearProgrammeStatistics->year}}</td>
                                 <td>{{$yearProgrammeStatistics->male_RGoB}}</td>
                                 <td>{{$yearProgrammeStatistics->female_RGoB}}</td>
                                 <td>{{$yearProgrammeStatistics->total_RGoB}}</td>
                                 <td>{{$yearProgrammeStatistics->male_self}}</td>
                                 <td>{{$yearProgrammeStatistics->female_self}}</td>
                                 <td>{{$yearProgrammeStatistics->total_self}}</td>
                                 <td>{{$yearProgrammeStatistics->male_other}}</td>
                                 <td>{{$yearProgrammeStatistics->female_other}}</td>
                                 <td>{{$yearProgrammeStatistics->total_other}}</td>
                                 <td>{{$yearProgrammeStatistics->male_grand}}</td>
                                 <td>{{$yearProgrammeStatistics->female_grand}}</td>
                                 <td>{{$yearProgrammeStatistics->grand_total}}</td>
                                
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
