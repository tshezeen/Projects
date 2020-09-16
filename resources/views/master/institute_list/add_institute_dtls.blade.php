<!-- <link rel="stylesheet" href="{{URL('public/css/font-awesome.css')}}"> -->

 <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('public/css/style.css')}}">
 <link rel="stylesheet" href="{{URL('public/css/bootstrap.min.css')}}">

 <script src="{{URL('public/js/dataTables.bootstrap.js')}}"></script>

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
                           Add New Institute Details
                        </small>
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   <form method="post" action = "">
                            {{ csrf_field() }}
                            
                        <div class="panel panel-primary">
                       
                            <div class="panel-heading">Institute Details</div>
                            <div class="panel-body">
                                <div class="row">
                                   <div class="form-group"></div>
                                   <div class="form-group">
                                      <div class="col-lg-2" align="right">
                                        <label>Institute Name<font color="red">*</font></label>
                                      </div>  
                                       <div class ="col-lg-3">
                                       <input id="insName" type="text" class="form-control" name="insName" placeholder="Enter Institute Name">
                                          <!-- <span class="help-block" id="mobErrorMsg"></span> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <div class="col-lg-2" align="right">
                                        <label>Institute Type<font color="red">*</font></label>
                                      </div>
                                       <div class ="col-lg-3">
                                       <select id="insType" class="form-control">
                                            <option value="">select</option>
                                            <option value="public">Public</option>
                                            <option value="private">Private</option>
                                            <option value="auto">Autonomous </option>
                                      
                                         </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="form-group"></div>
                                   <div class="form-group">
                                      <div class="col-lg-2" align="right">
                                        <label>Location<font color="red">*</font></label>
                                      </div>  
                                       <div class ="col-lg-3">
                                       <input id="location" type="text" class="form-control" name="location" placeholder="Enter Institute Location">
                                         
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <div class="col-lg-2" align="right">
                                        <label>Contact Address<font color="red">*</font></label>
                                      </div>
                                       <div class ="col-lg-3">
                                      <input id="address" type="text" class="form-control" name="address" placeholder="Enter Contact Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="form-group"></div>
                                   <div class="form-group">
                                      <div class="col-lg-2" align="right">
                                        <label>Establishment Year<font color="red">*</font></label>
                                      </div>  
                                       <div class ="col-lg-3">
                                          <input id="estYear" type="number" class="form-control" name="estYear" placeholder="Enter Establishment Year">
                                         
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <div class="col-lg-2" align="right">
                                        <label>Total Acreage</label>
                                      </div>
                                        <div class ="col-lg-3">
                                            <input id="acreage" type="text" class="form-control" name="acreage" placeholder="Enter Total Acreage">
                                          </div> 
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="form-group"></div>
                                   <div class="form-group">
                                      <div class="col-lg-2" align="right">
                                        <label>National Accreditation</label>
                                      </div>  
                                       <div class ="col-lg-3">
                                          <input id="nationalAccre" type="text" class="form-control" name="nationalAccre" placeholder="Enter National Accreditation">
                                         
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <div class="col-lg-2" align="right">
                                        <label>International Accreditation</label>
                                      </div>
                                        <div class ="col-lg-3">
                                           <input id="internationalAccre" type="text" class="form-control" name="internationalAccre" placeholder="Enter International Accreditation">
                                          </div> 
                                    </div>
                                </div>

                                <div class="row">
                                  <div class="form-group"></div>
                                   <div class="form-group">
                                      <div class="col-lg-2" align="right">
                                        <label>Website <font color="red">*</font></label>
                                      </div>  
                                       <div class ="col-lg-3">
                                          <input id="website" type="text" class="form-control" name="website" placeholder="Enter Website URL">
                                         
                                        </div>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="form-group">
                                      <div class="col-lg-2" align="right">
                                          <label> Description<font color="red">*</font></label>
                                      </div>
                                        <div class ="col-lg-3">
                                            <textarea class="form-control" name="desc" id="desc" rows="4" cols="50"></textarea>
                                         </div> 
                                    </div>
                                </div>
                                <div class="row">
                                  <div class="form-group"></div>
                                  <div class="col-lg-12" align="center">
                                    <button type ="button" class="btn btn-primary" name="addInsBtn" id="addInsBtn">Add Institute </button>
                                    
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
                