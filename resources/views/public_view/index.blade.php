
    <!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
<link rel="stylesheet" href="{{ asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">

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
                 Tertiary Education Institute Records 
                  <small>
                      <i class="ace-icon fa fa-angle-double-right"></i>
                      Details 
                  </small>
              </h4>
          </div>
      </div>
   
   <div class="row">
        <div class="col-lg-12">
          
           <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover" id="instDls"> 
               
                 <thead>
                      <tr>
                      <!--  <th>Sl.No</th> -->
                       <th>Institute Name</th>
                       <th>Record Year</th>
                       <th>Action</th>
                      </tr>
                </thead>
               
                  <tbody>
                   @foreach ($recordList as $recordList)
                      <tr>
                          <!-- <td></td> -->
                          <td>{{$recordList->institute}}</td>
                          <td>{{$recordList->year}}</td>
                          <td> 
                             <form method="POST" action="">
                                  
                                  <input type="hidden" name="_method" value="PATCH">
                                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  
                                 
                                   <a href="{{ route('public.show', ['year_id' => $recordList->record_yr,'inst_id' => $recordList->inst_id,'inst_name' => $recordList->institute,'year' => $recordList->year]) }}" class="btn btn-primary btn-margin">
                                             View
                                      </a>
                                    
                                  
                                  
                              </form>
                          </td>
                        </tr> 
                    @endforeach
                   </tbody>

                   </table>
                </div>
          
        </div>
      </div>

</div>

