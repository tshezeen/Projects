@extends('reports.base')

@section('action-content')
     <div class="row box-body">
     <div class="row">
      <div class="col-lg-12">
         
          <div class="panel panel-primary">
          <div class="panel-heading"><label>Total Intake of Students </label>
            <div class="pull-right" id ="buttonTop">
                      <a href="{{url('report/intake_pdf')}}"> <button type="button" class="btn btn-primary btn-md-5"><i class="fa fa-file-pdf" ></i> Download PDF</button></a>
                        
                </div>

          </div>
            
            <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                             
                             <th>Institution Name </th>
                             
                             <th>RGoB</th>
                             <th>Self-Funding</th>
                             <th>Other-Funding</th>
                             <th>Total</th>
                             
                          </tr>
                    </thead>

                      <tbody>
                     
                        @foreach($totalIntakeList as $totalIntakeList)
                             <tr>
                                 
                                 <td>{{$totalIntakeList->institute}}</td>
                                 <td>{{$totalIntakeList->RGoB_funded}}</td>
                                 <td>{{$totalIntakeList->self_funded}}</td>
                                 <td>{{$totalIntakeList->other_funded}}</td>
                                 <td>{{$totalIntakeList->total}}</td>
                                
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
