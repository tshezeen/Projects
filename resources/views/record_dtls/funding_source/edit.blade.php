

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
                  <form  role="form" method="POST" action="{{ route('funding.update', ['id' => $fundingSrourceList->id]) }}">
                     <input id="record_yr" type="hidden" class="form-control" name="record_yr" value="{{$fundingSrourceList->record_yr}}">
                      <input id="inst_id" type="hidden" class="form-control" name="inst_id" value="{{$fundingSrourceList->inst_id}}">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                     <input type="hidden" name="_method" value="PATCH">
                     <div class="panel-body">
                        <label><font color="red">Amounts in millions of Nu.</font></label>
                      <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">RGoB Student Enrollment</label>

                                <div class="col-md-3">
                                    <input id="funding" type="numeric" class="form-control funding" name="RGoB_funding" value="{{$fundingSrourceList->RGoB_funding}}" >
                                    
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Private Student Enrollment </label>

                                <div class="col-md-3">
                                   
                                    <input id="funding" type="numeric" class="form-control funding" name="pvt_funding" value="{{$fundingSrourceList->pvt_funding}}" >
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Consultancy Services</label>

                                <div class="col-md-3">
                                   <input id="funding" type="numeric" class="form-control funding" name="consultant_service" value="{{$fundingSrourceList->consultant_service}}" >

                                  
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Research Grants </label>

                                <div class="col-md-3">
                                    
                                     <input id="funding" type="numeric" class="form-control funding" name="research_grant" value="{{$fundingSrourceList->research_grant}}" >

                                    
                                </div>
                            </div>
                        </div>
            
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                              <label for="name" class="col-md-2 control-label">Facilities Rental  </label>

                              <div class="col-md-3">
                                  <input id="funding" type="numeric" class="form-control funding" name="facilities_rental" value="{{$fundingSrourceList->facilities_rental}}" >
                                  
                              </div>
                          </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label"> Sale of Assets and Products</label>

                                <div class="col-md-3">
                                    
                                    <input id="funding" type="numeric" class="form-control funding" name="sale_of_asset" value="{{$fundingSrourceList->sale_of_asset}}" >
                                   
                                </div>
                            </div>
                        </div>

                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Other Funding</label>

                                <div class="col-md-3">
                                    <input id="funding" type="numeric" class="form-control funding" name="other_funding" value="{{$fundingSrourceList->other_funding}}" >
                                    
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label"> Total Funding</label>

                                <div class="col-md-3">
                                    
                                    <input id="total_funding" type="numeric" class="form-control" name="total_funding" value="{{$fundingSrourceList->total_funding}}" disabled>
                                    <input id="total_funding" type="hidden" class="form-control" name="total_funding" value="{{$fundingSrourceList->total_funding}}" >
                                </div>
                            </div>
                        </div>
                       
                        </div><!-- end of panel-body -->

                         <div class="row">
                       
                           <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div><br>
                    
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
    $("input[id=funding]").each(function () {
    
      sum = sum + parseInt($(this).val());
    
    })
    $("input[id=total_funding]").val(sum); 

  });  
  
});


</script>

            
          
           
          

 


            
          
           
          