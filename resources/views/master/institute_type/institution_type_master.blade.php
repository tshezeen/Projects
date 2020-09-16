

<link rel="stylesheet" href="{{URL('public/css/bootstrap.min.css')}}">
<!-- <link rel="stylesheet" href="{{URL('public/css/dataTables.bootstrap.css')}}">-->
<link rel="stylesheet" href="{{URL('public/css/dataTables.responsive.css')}}">   

 
<link href="http:////cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">


<script src="{{URL('public/js/jquery-1.11.1.js')}}"></script>
<script src="{{URL('public/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL('public/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL('public/js/dataTables.bootstrap.js')}}"></script>

 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
 <style>
  .page-head-line {
    padding-bottom: 20px;
    border-bottom: 2px solid #34495e;
    color: #064CA7;
    font-size: 20px;
    margin-bottom: 40px;
}
 </style>
 <script>

/*$(document).ready(function() {
    $('#instDls').DataTable({
            responsive: true
    });
});*/

$(document).ready(function() {
    $('#insTypeTbl').DataTable();
} );

</script>


<div class="container">
    <div class="row">
        <div class="col-1g-12">
           <!--  <div class="row">
                 <div class="col-lg-12">
                     <img src="{{url('/public/images/tess-logo-green.png')}}" width="100%" height="20%">
                 </div>
            </div>
            <br> -->
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h4 class="page-head-line">
                       Tertiary Education Statistics System
                        <small>
                            <i class="ace-icon fa fa-angle-double-right"></i>
                           Institute Type List 
                        </small>
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                   
                    <!-- <div class="panel-heading"></div> -->
                    <div class="panel-body">
                        <div class="table-responsive">
                             <table class="table table-striped table-bordered table-hover" id="insTypeTbl">
                               <thead>
                                    <tr>
                                     <th>Sl.No</th>
                                     <th>Institute Type</th>
                                     <th>Action</th>
                                    </tr>
                              </thead>
                                <tbody>
                                    <tr>
                                       <td>1</td>
                                       <td>Autonomous</td>
                                       <td><a href="#"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                     <tr>
                                       <td>2</td>
                                       <td>Private </td>
                                       <td><a href="#"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;<a href="#"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                 </tbody>
                                 </table>
                              </div>
                         </div>
                     </div>
     
                </div>
             </div>
         </div><!-- end of col-lg-12 -->    
    </div>
</div>
                