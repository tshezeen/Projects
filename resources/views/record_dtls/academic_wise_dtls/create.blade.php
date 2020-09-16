
 <div class="row">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                  <h4 class="page-head-line">
                    Add New Details
                  </h4>
                 <form role="form" method="POST" action="{{ route('academic_wise_dtls.store') }}">
                        {{ csrf_field() }}
                    <div class="panel-body">
                  
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Program  <font color="red">*</font></label>

                            <div class="col-md-3">
                                <select name="program_id" class="form-control"> 
                                        <option value="">Select</option>
                                        @foreach ($programOffered as $programList)
                                            <option value="{{$programList->id}}">{{$programList->program_name}}</option>
                                        @endforeach
                                    </select>

                               
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Academic Year  <font color="red">*</font> </label>

                                <div class="col-md-3">
                                    <select name="academic_year_id" class="form-control"> 
                                        <option value="">Select</option>
                                        @foreach ($academicList as $academicYear)
                                            <option value="{{$academicYear->id}}">{{$academicYear->academic_year}}</option>
                                        @endforeach
                                    </select>
                                  

                                   
                                    </div>
                                </div>
                            </div>
                       </div><!-- end of panel body -->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <label>#RGoB</label>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group"></div>   
                                    <div class="form-group">
                                        <label for="name" class="col-md-2 control-label">Male </label>

                                        <div class="col-md-3">
                                            <input id="RGoB_gender" type="numeric" class="form-control" name="male_RGoB" value="0">

                                        </div>
                                    </div>
                                        <div class="col-lg-1"></div>
                                            <div class="form-group">
                                              <label for="name" class="col-md-2 control-label">Female </label>

                                            <div class="col-md-3">
                                              <input id="RGoB_gender" type="numeric" class="form-control" name="female_RGoB" value="0">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="form-group"></div>   
                                    <div class="form-group">
                                        <label for="name" class="col-md-2 control-label">Total </label>

                                        <div class="col-md-3">
                                            <input id="total_RGoB" type="numeric" class="form-control" name="total_RGoB" disabled value="0">

                                            <input id="total_RGoB" type="hidden" class="form-control" name="total_RGoB" >

                                        </div>
                                    </div>
                                       
                                </div>
                            </div><!-- end of RGoB panel -->
                            <div class="panel-heading">
                                <label>#Self-Financed</label>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group"></div>   
                                    <div class="form-group">
                                        <label for="name" class="col-md-2 control-label">Male </label>

                                        <div class="col-md-3">
                                            <input id="self_gender" type="numeric" class="form-control" name="male_self" value="0">

                                        </div>
                                    </div>
                                        <div class="col-lg-1"></div>
                                            <div class="form-group">
                                              <label for="name" class="col-md-2 control-label">Female </label>

                                            <div class="col-md-3">
                                              <input id="self_gender" type="numeric" class="form-control" name="female_self" value="0">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="form-group"></div>   
                                    <div class="form-group">
                                        <label for="name" class="col-md-2 control-label">Total </label>

                                        <div class="col-md-3">
                                            <input id="total_self" type="numeric" class="form-control" name="total_self" value="0" disabled>

                                            <input id="total_self" type="hidden" class="form-control" name="total_self" value="0">

                                        </div>
                                    </div>
                                       
                                </div>
                            </div><!-- end of Self-Finamced panel -->
                            <div class="panel-heading">
                                <label>#Other</label>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="form-group"></div>   
                                    <div class="form-group">
                                        <label for="name" class="col-md-2 control-label">Male </label>

                                        <div class="col-md-3">
                                            <input id="other_gender" type="numeric" class="form-control" name="male_other"value="0">

                                        </div>
                                    </div>
                                        <div class="col-lg-1"></div>
                                            <div class="form-group">
                                              <label for="name" class="col-md-2 control-label">Female </label>

                                            <div class="col-md-3">
                                              <input id="other_gender" type="numeric" class="form-control" name="female_other" value="0">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                    <div class="form-group"></div>   
                                    <div class="form-group">
                                        <label for="name" class="col-md-2 control-label">Total </label>

                                        <div class="col-md-3">
                                            <input id="total_other" type="numeric" class="form-control" name="total_other" value="0" disabled>

                                            <input id="total_other" type="hidden" class="form-control" name="total_other" value="0">

                                        </div>
                                    </div>

                                       
                                </div>
                            </div><!-- end of other panel -->
                            
                        </div><!-- end of inner panel primary -->
                        
                         <div class="row">
                           <div class="panel-body">
                                <div class="form-group">
                                  <label for="name" class="col-md-2 control-label">Grand Total </label>

                                    <div class="col-md-3">
                                      <input id="grand_total" type="numeric" class="form-control"  name="grand_total" value="0" disabled>

                                       <input id="grand_total" type="hidden" class="form-control" name="grand_total" value="0">

                                    </div>
                                </div>
                                
                            
                                   <div class="col-md-4 col-md-offset-1">
                                        <button type="submit" class="btn btn-primary">
                                            Add
                                        </button>
                                    </div>
                                
                            </div>    
                        </div>
                       
                   
                    
                 </form>

                </div><!-- end of panel-primary -->
           </div>

      </div>
  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

<script>
  
 

$(document).ready(function (e) {

  $("input").change(function () {
    
    var RGOB_sum=0.00;
    $("input[id=RGoB_gender]").each(function () {
    
      RGOB_sum = RGOB_sum + parseInt($(this).val());
    
    })
    $("input[id=total_RGoB]").val(RGOB_sum);

    var self_total = document.getElementById('total_self').value;
    var RGoB_total = document.getElementById('total_RGoB').value;
    var other_total = document.getElementById('total_other').value;
    var sum = parseInt(self_total)+parseInt(RGoB_total)+parseInt(other_total);
    $ ("#grand_total").val(sum);

     
  });  

  $("input").change(function () {
    
    var self_sum=0.00;
    $("input[id=self_gender]").each(function () {
    
      self_sum = self_sum + parseInt($(this).val());
    
    })
    $("input[id=total_self]").val(self_sum); 

     var self_total = document.getElementById('total_self').value;
    var RGoB_total = document.getElementById('total_RGoB').value;
    var other_total = document.getElementById('total_other').value;
    var sum = parseInt(self_total)+parseInt(RGoB_total)+parseInt(other_total);
    $ ("#grand_total").val(sum);
   
  });  

    $("input").change(function () {
    
    var other_sum=0.00;
    $("input[id=other_gender]").each(function () {
    
      other_sum = other_sum + parseInt($(this).val());
    
    })
    $("input[id=total_other]").val(other_sum); 

     var self_total = document.getElementById('total_self').value;
    var RGoB_total = document.getElementById('total_RGoB').value;
    var other_total = document.getElementById('total_other').value;
    var sum = parseInt(self_total)+parseInt(RGoB_total)+parseInt(other_total);
    $ ("#grand_total").val(sum);
   
  });


  
});


</script>