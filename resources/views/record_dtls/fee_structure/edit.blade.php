
     <div class="row">
      @foreach($feeStructureList as $fess)
       <form role="form" method="POST" action="{{ route('fee_structure.update', ['id' => $fess->id]) }}">
        <input id="record_yr" type="hidden" class="form-control" name="record_yr" value="{{$fess->record_yr}}">
        <input id="inst_id" type="hidden" class="form-control" name="inst_id" value="{{$fess->inst_id}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="_method" value="PATCH">
       <div class="col-md-12 col-lg-12">
              <h4 class="page-head-line">
                
                 <?php echo session('institute');?>
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                        Fee Structure Per Person of the year <?php echo session('year');?>
                    </small>
              </h4>
          </div>
       
        <div class="col-lg-12">
            <div class="panel panel-primary">
            <div class="panel-heading"><label>Fee Structure Per Person</label></div>
                    
                       <div class="panel-body">
                          <label><font color="red">Amounts in Nu.</font></label>
                        <div class="row">
                             <div class="form-group"></div>
                             
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Student Residence(Annual) </label>

                                  <div class="col-md-3">
                                      <input id="fees" type="numeric" class="form-control" name="hostel" value="{{$fess->hostel}}">
                                      
                                  </div>
                              </div>
                              <div class="col-lg-1"></div>
                                  <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Meal(Annual)  </label>

                                  <div class="col-md-3">
                                     
                                      <input id="fees" type="numeric" class="form-control" name="mess" value="{{$fess->mess}}">
                                     
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                             <div class="form-group"></div>
                             
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Admission(One-Time) </label>

                                  <div class="col-md-3">
                                     <input id="fees" type="numeric" class="form-control" name="admission" value="{{$fess->admission}}">

                                    
                                  </div>
                              </div>
                              <div class="col-lg-1"></div>
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Registration </label>

                                  <div class="col-md-3">
                                      
                                       <input id="fees" type="numeric" class="form-control" name="registration" value="{{$fess->registration}}">

                                      
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                             <div class="form-group"></div>
                             
                              <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Library (Annual) </label>

                                <div class="col-md-3">
                                    <input id="fees" type="numeric" class="form-control" name="library" value="{{$fess->library}}">
                                    
                                </div>
                            </div>
                              <div class="col-lg-1"></div>
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label"> Exam(Annual)</label>

                                  <div class="col-md-3">
                                      
                                      <input id="fees" type="numeric" class="form-control" name="exam" value="{{$fess->exam}}">
                                     
                                  </div>
                              </div>
                          </div>

                          <div class="row">
                             <div class="form-group"></div>
                             
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Security Deposit (One-Time) </label>

                                  <div class="col-md-3">
                                      <input id="fees" type="numeric" class="form-control" name="security_deposit" value="{{$fess->security_deposit}}">
                                      
                                  </div>
                              </div>
                              <div class="col-lg-1"></div>
                              <div class="form-group">
                                  <label for="name" class="col-md-2 control-label"> Misellenaous(Annual)</label>

                                  <div class="col-md-3">
                                      
                                      <input id="fees" type="numeric" class="form-control" name="miscellaneous" value="{{$fess->miscellaneous}}">
                                     
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                             <div class="form-group"></div>
                             
                              <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Others (One-Time) if any</label>

                                <div class="col-md-3">
                                    <input id="fees" type="numeric" class="form-control" name="others" value="{{$fess->others}}">
                                    
                                </div>
                                 <div class="col-lg-1"></div>
                                  <div class="form-group">
                                      <label for="name" class="col-md-2 control-label"> Grand Total</label>

                                      <div class="col-md-3">
                                          
                                          <input id="fees_total" type="numeric" class="form-control" name="total"  disabled value=" {{$fess->total}}">

                                          <input id="fees_total" type="hidden" class="form-control" name="total" >
                                         
                                      </div>
                                  </div>
                                </div>
                                
                            </div>
                          </div><!-- end of panel-body -->
                        

                           <div class="row">
                         
                             <div class="col-md-6 col-md-offset-3">
                                  <button type="submit" class="btn btn-primary">
                                      Submit
                                  </button>
                              </div>
                          </div><br>

                    
                 
         
            </div><!-- end of panel-primary -->
          </div>
          </form>
        @endforeach
   </div>

 

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>
  

$(document).ready(function (e) {

  $("input").change(function () {
    
    var sum=0.00;
    $("input[id=fees]").each(function () {
    
      sum = sum + parseInt($(this).val());
    
    })
    $("input[id=fees_total]").val(sum); 

  });  
  
});


</script>
            
          
           
          