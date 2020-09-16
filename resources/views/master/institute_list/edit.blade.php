@extends('master.institute_list.base')

@section('action-content')

  <div class="row box-body">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <div class="panel-heading">Edit Institute Details </div>
                <div class="panel-body">
                    <form  role="form" method="POST" action="{{ route('institute_list.update', ['id' => $insdtlsEdit->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    

                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('inst_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Institute Name <font color="red">*</font></label>

                            <div class="col-md-3">
                                <input id="inst_name" type="text" class="form-control" name="inst_name" value="{{ $insdtlsEdit->inst_name }}" required autofocus>

                                @if ($errors->has('inst_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('inst_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group{{ $errors->has('inst_type') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-2 control-label">Institute Type<font color="red">*</font> </label>

                                <div class="col-md-3">
                                    <select name="inst_type" class="form-control"> 
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
                                <input id="location" type="text" class="form-control" name="location" value="{{ $insdtlsEdit->location }}" required autofocus>

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
                                    
                                    <input id="address" type="text" class="form-control" name="address" value="{{ $insdtlsEdit->address }}" required autofocus>

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
                                <input id="est_year" type="text" class="form-control" name="est_year" value="{{ $insdtlsEdit->est_year }}" required autofocus>

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
                                    
                                    <input id="total_acr" type="text" class="form-control" name="total_acr" value="{{ $insdtlsEdit->total_acr }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">National Accreditation  </label>

                            <div class="col-md-3">
                                <input id="national_accre" type="text" class="form-control" name="national_accre" value="{{ $insdtlsEdit->national_accre }}">

                                
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group">
                                <label for="name" class="col-md-2 control-label">International Accreditation  </label>

                                <div class="col-md-3">
                                   
                                    <input id="international_accre" type="text" class="form-control" name="international_accre" value="{{ $insdtlsEdit->international_accre }}">

                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Website<font color="red">*</font>  </label>

                            <div class="col-md-3">
                                <input id="website" type="text" class="form-control" name="website" required value="{{ $insdtlsEdit->website }}">

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
                    
                                     <textarea class="form-control" name="description" type ="text" id="description" rows="5" required autofocus value="{{ $insdtlsEdit->description }}">{{ $insdtlsEdit->description }}</textarea>

                                </div>
                            </div>
                        </div>

                        
                            <div class="row">
                                <div class="form-group"></div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">
                                        Update
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
