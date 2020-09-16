@extends('reports.base')

@section('action-content')
     <div class="row box-body">
     <div class="row">
      <div class="col-lg-12">
         
          <div class="panel panel-primary">
          <div class="panel-heading"><label>Academicians with various Qualification across TEIs(in country)  </label>
             <div class="pull-right" id ="buttonTop">
                      <a href="{{url('report/academicians_pdf')}}"> <button type="button" class="btn btn-primary btn-md-5"><i class="fa fa-file-pdf" ></i> Download PDF</button></a>
                        
                </div>

          </div>
            
            <div class="panel-body">
              <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover" id="tbl">
                     <thead>
                          <tr>
                             <!-- <th>Sl.No</th> -->
                             <th>Institution Name </th>
                             
                             <th>Diploma</th>
                             <th>Bachelor</th>
                             <th>Master</th>
                             <th>Doctorate</th>
                             
                          </tr>
                    </thead>

                      <tbody>
                     
                        @foreach($acadamicians as $acadamicians)
                             <tr>
                                 <!-- <td>1</td> -->
                                 <td>{{$acadamicians->institute}}</td>
                                 <td>{{$acadamicians->diploma}}</td>
                                 <td>{{$acadamicians->bachelor}}</td>
                                 <td>{{$acadamicians->master}}</td>
                                 <td>{{$acadamicians->doctorate}}</td>
                                
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
