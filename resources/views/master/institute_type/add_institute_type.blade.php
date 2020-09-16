<!-- <link rel="stylesheet" href="{{URL('public/css/font-awesome.css')}}"> -->

 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('public/css/style.css')}}">
<link rel="stylesheet" href="{{URL('public/css/bootstrap.min.css')}}">

<!-- <script src="{{URL('public/js/bootstrap.min.js')}}"></script> -->

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
                           Add New Institute Type 
                        </small>
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   <form method="post" action = "">
                            {{ csrf_field() }}
                            
                        <div class="panel panel-primary">
                       
                            <div class="panel-heading">Institute Type</div>
                            <div class="panel-body">
                                <div class="row">
                                   <div class="form-group"></div>
                                   <div class="form-group">
                                      <div class="col-lg-2" align="right">
                                        <label>Institute Type<font color="red">*</font></label>
                                      </div>  
                                       <div class ="col-lg-3">
                                       <input id="insType" type="text" class="form-control" name="insType" placeholder="Enter Institute Type">
                                
                                        </div>
                                    </div>
                                   
                                </div>

                                
                                <div class="row">
                                  <div class="form-group"></div>
                                  <div class="col-lg-4" align="right">
                                    <button type ="button" class="btn btn-primary" name="addInsTypeBtn" id="addInsTypeBtn">Add Institute Type</button>
                                  
                                  </div>
                                </div>
                            </div>
                         </div>
                    </form>
                </div>
             </div>
         </div><!-- end of col-lg-12 -->    
    </div>
</div>
                