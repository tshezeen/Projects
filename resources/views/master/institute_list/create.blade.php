@extends('master.institute_list.base')

@section('action-content')

 <div class="row box-body">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <div class="panel-heading">Add New Institute </div>
                <div class="panel-body">
                   <form role="form" method="POST" action="{{ route('institute_list.store') }}">
                        {{ csrf_field() }}

                      
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('inst_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Institute Name <font color="red">*</font></label>

                            <div class="col-md-3">
                                <input id="inst_name" type="text" class="form-control" name="inst_name" value="{{ old('inst_name') }}" required autofocus>

                                @if ($errors->has('inst_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inst_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group{{ $errors->has('inst_type') ? ' has-error' : '' }}">
                                <label for="inst_type" class="col-md-2 control-label">Institute Type<font color="red">*</font> </label>

                                <div class="col-md-3">
                                    <select name="inst_type" class="form-control" required> 
                                        <option value="">Select</option>
                                        @foreach ($instTypes as $instTypes)
                                            <option value="{{$instTypes->id}}">{{$instTypes->inst_type}}</option>
                                        @endforeach
                                    </select>
                                  

                                    @if ($errors->has('inst_type'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('inst_type') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Location<font color="red">*</font>  </label>

                            <div class="col-md-3">
                                <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" required autofocus>

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-2 control-label">Address <font color="red">*</font> </label>

                                <div class="col-md-3">
                                    
                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('est_year') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Establishment Year  <font color="red">*</font></label>

                            <div class="col-md-3">
                                <input id="est_year" type="text" class="form-control" name="est_year" value="{{ old('est_year') }}" required autofocus>

                                @if ($errors->has('est_year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('est_year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Total Acreage </label>

                                <div class="col-md-3">
                                    
                                    <input id="total_acr" type="text" class="form-control" value = "0" name="total_acr">

                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">National Accreditation  </label>

                            <div class="col-md-3">
                                <input id="national_accre" type="text" class="form-control" name="national_accre">

                                
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group">
                                <label for="name" class="col-md-2 control-label">International Accreditation  </label>

                                <div class="col-md-3">
                                   
                                    <input id="international_accre" type="text" class="form-control" name="international_accre" value="{{ old('international_accre') }}">

                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Website<font color="red">*</font>  </label>

                            <div class="col-md-3">
                                <input id="website" type="text" class="form-control" name="website" required value="{{ old('website') }}">

                                @if ($errors->has('website'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                       </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                             <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Description <font color="red">*</font> </label>

                                <div class="col-md-9">

                                     <textarea class="form-control" name="description" id="description"  rows="5" required autofocus value="{{ old('description') }}"></textarea>

                                </div>
                            </div>
                        </div>

                         <div class="row">
                         <div class="form-group"></div>

                             <div class="form-group">
                                <div class="col-md-8 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">
                                        Create
                                    </button>
                                
                                    <a href="{{ route('institute_list.index') }}" class="btn btn-warning ">Cancel</a>
                                </div>
                            </div>
                        </div>
                       
                    </form>


                </div>
           </div>

      </div>
   </div>

@endsection
