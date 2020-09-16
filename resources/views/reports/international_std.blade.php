@extends('reports.base')

@section('action-content')
     <div class="row box-body">
     <div class="row">
      <div class="col-lg-12">
         
          <div class="panel panel-primary">
          <div class="panel-heading"><label>International Students Studying in each College/Institute(in country)  </label>

          </div>
            
            <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                             <!-- <th>Sl.No</th> -->
                             <th>Institution Name </th>
                             
                             <th>Number of Students</th>
            
                             
                          </tr>
                    </thead>

                      <tbody>
                     
                        @foreach($internationalStdList as $internationalStdList)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td>{{$internationalStdList->institute}}</td>
                                 <td>{{$internationalStdList->international_stds}}</td>
                                
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
