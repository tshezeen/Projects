
     <div class="row ">
      <div class="col-lg-12">
          <h4 class="page-head-line">
                
                 <?php echo session('institute');?>
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Funding Source and Revenue(Annual) of the year <?php echo session('year');?>
                    </small>
              </h4>
          <div class="panel panel-primary">
          <div class="panel-heading"><label>Funding Source and Revenue(Annual) </label></div>

              @foreach ($fundingSrourceList as $fundingSrourceList)
                   <form  role="form" method="POST" action="">
                     <div class="panel-body">
                        <label><font color="red">Amounts in millions of Nu.</font></label>
                      <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">RGoB Student Enrollment</label>

                                <div class="col-md-3">
                                    <input id="RGoB_funding" type="numeric" class="form-control funding" name="funding" value="{{$fundingSrourceList->RGoB_funding}}" disabled>
                                    
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Private Student Enrollment </label>

                                <div class="col-md-3">
                                   
                                    <input id="pvt_funding" type="numeric" class="form-control funding" name="funding" value="{{$fundingSrourceList->pvt_funding}}" disabled>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Consultancy Services</label>

                                <div class="col-md-3">
                                   <input id="consultant_service" type="numeric" class="form-control funding" name="funding" value="{{$fundingSrourceList->consultant_service}}" disabled>

                                  
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Research Grants </label>

                                <div class="col-md-3">
                                    
                                     <input id="research_grant" type="numeric" class="form-control funding" name="funding" value="{{$fundingSrourceList->research_grant}}" disabled>

                                    
                                </div>
                            </div>
                        </div>
            
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                              <label for="name" class="col-md-2 control-label">Facilities Rental  </label>

                              <div class="col-md-3">
                                  <input id="facilities_rental" type="numeric" class="form-control funding" name="funding" value="{{$fundingSrourceList->facilities_rental}}" disabled>
                                  
                              </div>
                          </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label"> Sale of Assets and Products</label>

                                <div class="col-md-3">
                                    
                                    <input id="sale_of_asset" type="numeric" class="form-control funding" name="funding" value="{{$fundingSrourceList->sale_of_asset}}" disabled>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Other Funding</label>

                                <div class="col-md-3">
                                    <input id="other_funding" type="numeric" class="form-control funding" name="funding" value="{{$fundingSrourceList->other_funding}}" disabled>
                                    
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label"> Total Funding</label>

                                <div class="col-md-3">
                                    
                                    <input id="total_funding" type="numeric" class="form-control" name="total_funding" value="{{$fundingSrourceList->total_funding}}" disabled>
                                   
                                </div>
                            </div>
                        </div>
                       
                        </div><!-- end of panel-body -->
                    
                  </form>
               
            @endforeach
          </div><!-- end of pane-primary -->

 
      </div>
   </div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>
  

$(document).ready(function (e) {

  $("input").change(function () {
    
    var sum=0.00;
    $("input[name=funding]").each(function () {
    
      sum = sum + parseInt($(this).val());
    
    })
    $("input[name=total_funding]").val(sum); 

  });  
  
});


</script>

            
          
           
          