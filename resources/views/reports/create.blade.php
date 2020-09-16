

 <div class="row">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                
                <h4 class="page-head-line">
                    Add New Facility
                  </h4>
                <div class="panel-body">
                   <form role="form" method="POST" action="{{ route('facilities.store') }}">
                        {{ csrf_field() }}

                      
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Facility Type  <font color="red">*</font></label>

                            <div class="col-md-3">
                               
                                 <select name="facility_type_id" class="form-control"> 
                                        <option value="">Select</option>
                                        @foreach ($facilityType as $facilityType)
                                            <option value="{{$facilityType->id}}">{{$facilityType->facility}}</option>
                                        @endforeach
                                    </select>
                                  

                              
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Number  <font color="red">*</font> </label>

                                <div class="col-md-3">
                                   
                                    <input id="number" type="numeric" class="form-control" name="number"  plcaeholder="Total no. of such facility." required autofocus>
                                    
                                </div>
                            </div>
                        </div>
                      
                        <div class="row">
                           <div class="form-group"></div>
                           
                           
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label"> Capacity
                                </label>

                                <div class="col-md-3">
                                    
                                    <input id="capacity" type="numeric" class="form-control" name="capacity" placeholder="Capackity(persons) in each.">

                                   
                                </div>
                            </div>
                        </div>
                        <br>
                         <div class="row">
                       
                           <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                       
                    </form>


                </div>
           </div>

      </div>
   </div>

