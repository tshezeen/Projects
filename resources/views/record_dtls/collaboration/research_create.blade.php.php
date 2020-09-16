

 <div class="row">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <h4 class="page-head-line">
                Add New Collaboration 
                 
              </h4>
                <div class="panel-body">
                   <form role="form" method="POST" action="{{ route('collaboration.store') }}">
                    <input id="inst_id" type="hidden" class="form-control" name="inst_id" value="{{ old('inst_id') }}">
                        {{ csrf_field() }}


                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('collaboration') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Collaboration/Research Type <font color="red">*</font></label>

                            <div class="col-md-3">
                                 <select name="collaboration" class="form-control"> 
                                            <option value="">Select</option>
                                            <option value="national">National Collaboration</option>
                                            <option value="international">International Collaboration</option>
                                            <option value="innovation">Innovations </option>
                                            <option value="peer_reviewed">Peer-reviewed Journals </option>
                                            <option value="book">Books(Chapter)  </option>
                                            <option value="patent">Patent </option>
                                            <option value="conference">Conference proceeding papers  </option>
                                       
                                    </select>

                                @if ($errors->has('collaboration'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('collaboration') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group{{ $errors->has('award_id') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-2 control-label">Collaboration/Research By  <font color="red">*</font> </label>

                                <div class="col-md-3">
                                    <select name="by" class="form-control"> 
                                        <option value="">Select</option>
                                       
                                        <option value="teacher">Faculty</option>
                                        <option value="student">Student</option>
                                        
                                    </select>
                                  

                                    @if ($errors->has('award_id'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('award_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Description  </label>

                            <div class="col-md-9">
                               <textarea class="form-control" name="description" id="description" rows="4"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                           
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


                </div><!-- end of panel-body -->
           </div>

      </div>
   </div>

