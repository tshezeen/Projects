

 <div class="row">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <h4 class="page-head-line">
                Add New Staff 
                 
              </h4>
                <div class="panel-body">
                   <form role="form" method="POST" action="{{ route('program.store') }}">
                    <input id="inst_id" type="hidden" class="form-control" name="inst_id" value="{{ old('inst_id') }}">
                        {{ csrf_field() }}

                      
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label"> Title <font color="red">*</font></label>

                            <div class="col-md-3">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-2 control-label">Name  <font color="red">*</font> </label>

                                <div class="col-md-3">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                  

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('designation') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Designation<font color="red">*</font>  </label>

                            <div class="col-md-3">
                               <select name="designation" class="form-control"> 
                                        <option value="">Select</option>
                                        
                                            <option value="president">President</option>
                                            <option value="registrar">Registrar</option>
                                            <option value="director">Director</option>
                                        
                                    </select>

                                @if ($errors->has('designation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-2 control-label">Gender  </label>

                                <div class="col-md-3">
                                    

                                    <select name="cat_id" class="form-control"> 
                                            <option value="">Select</option>
                                       
                                            <option value="female">Female</option>
                                            <option value="male">Male</option>
                                        
                                        
                                    </select>

                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('quaification') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Qualification <font color="red">*</font></label>

                            <div class="col-md-3">
                               <input id="qualification" type="text" class="form-control" name="qualification" value="{{ old('qualification') }}" >

                               
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label"> Date of Joining Present Post <font color="red">*</font> </label>

                               

                                <div class="col-md-3">
                                     <div class=" input-group" id="joining_date" >
                                      <input type='text' class="form-control" name="date_of_joining" placeholder="yyyy-mm-dd" value="{{ old('date_of_joining') }}" required autofocus/>
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                                   <!--  <input id="joining_date" type="text" class="form-control" name="date_of_joining" placeholder="yyyy-mm-dd" value="{{ old('date_of_joining') }}" required autofocus> -->

                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Years of Experience  <font color="red">*</font></label>

                            <div class="col-md-3">
                              
                               <input id="years_of_exp" type="numeric" class="form-control" name="years_of_exp" value="{{ old('years_of_exp') }}" required autofocus>
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Email <font color="red">*</font> </label>

                                <div class="col-md-3">
                                    
                                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                   
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label"> Contact No  <font color="red">*</font></label>

                            <div class="col-md-3">
                              
                               <input id="contact_no" type="numeric" class="form-control" name="contact_no" value="{{ old('conact_no') }}"required autofocus>
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                           
                        </div><br>
                         <div class="row">
                       
                           <div class="form-group">
                                 <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                            </div>
                        </div>
                       
                    </form>


                </div><!-- end of panel-body -->
           </div>

      </div>
   </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>

    $(document).ready(function(){
    $('#joining_date').datepicker();
    
});

/*$(function () {


  $("#joining_date").datepicker()
  
});*/
</script>
