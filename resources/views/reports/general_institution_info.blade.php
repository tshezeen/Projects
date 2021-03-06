@extends('reports.base')

@section('action-content')
     <div class="row box-body">
     <div class="row">
      <div class="col-lg-12">
         
          <div class="panel panel-primary">
          <div class="panel-heading"><label>General Institution Information  </label>

          <div class="pull-right" id ="buttonTop">
                      <a href="{{url('report/institution_pdf')}}"> <button type="button" class="btn btn-primary btn-md-5"><i class="fa fa-file-pdf" ></i> Download PDF</button></a>
                        
                </div>
                 
             

          </div>
            
            <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                             <!-- <th>Sl.No</th> -->
                             <th>Institution Name </th>
                             <th>Institute Type</th>
                             <th>Year of Establishment</th>
                             <th>Location</th>
                             <!-- <th>action</th> -->
                             
                          </tr>
                    </thead>

                      <tbody>
                     
                        @foreach($genInstList as $genInstList)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td>{{$genInstList->inst_name}}</td>
                                 <td>{{$genInstList->type}}</td>
                                 <td>{{$genInstList->est_year}}</td>  
                                <td>{{$genInstList->location}}</td> 
                                <!-- <td> </td> -->
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
