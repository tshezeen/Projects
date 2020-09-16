@extends('record_dtls.program_offered.base')

@section('action-content')

 <div class="row box-body">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <div class="panel-heading">Add Fee Structures </div>
                <div class="panel-body">
                   <form role="form" method="POST" action="{{ route('fee_structure.store') }}">
                        {{ csrf_field() }}

                      
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Student Residence(Annual) </label>

                            <div class="col-md-3">
                                <input id="fees" type="numeric" class="form-control" name="hostel">
                                
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Meal(Annual)  </label>

                                <div class="col-md-3">
                                   
                                    <input id="fees" type="numeric" class="form-control" name="mess">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Admission(One-Time) </label>

                            <div class="col-md-3">
                               <input id="fees" type="numeric" class="form-control" name="admission">

                              
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="registration" class="col-md-2 control-label">Registration </label>

                                <div class="col-md-3">
                                    
                                     <input id="fees" type="numeric" class="form-control" name="registration">

                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Library (Annual) </label>

                            <div class="col-md-3">
                                <input id="fees" type="numeric" class="form-control" name="library">
                                
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label"> Exam(Annual)</label>

                                <div class="col-md-3">
                                    
                                    <input id="fees" type="numeric" class="form-control" name="exam">
                                   
                                </div>
                            </div>
                        </div>

                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Security Deposit (One-Time) </label>

                            <div class="col-md-3">
                                <input id="fees" type="numeric" class="form-control" name="security_deposit">
                                
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label"> Misellenaous(Annual)</label>

                                <div class="col-md-3">
                                    
                                    <input id="fees" type="numeric" class="form-control" name="miscellaneous">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Others (if any)</label>

                            <div class="col-md-3">
                                <input id="fees" type="numeric" class="form-control" name="others">
                                
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Grand Total</label>

                                <div class="col-md-3">
                                    
                                    <input id="total" type="numeric" class="form-control" name="total" disabled value="0">
                                    <input id="total" type="hidden" class="form-control" name="total" value="0">
                                   
                                </div>
                            </div>
                        </div>
                            
                        </div>
                        
                         <div class="row">
                       
                           <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                       
                    </form>


                </div>
           </div>

      </div>
   </div>

@endsection
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script>
  

$(document).ready(function (e) {

  $("input").change(function () {
    
    var sum=0.00;
    $("input[id=fees]").each(function () {
    
      sum = sum + parseInt($(this).val());
    
    })
    $("input[id=total]").val(sum); 

  });  
  
});


</script>