@extends('master.institute_list.base')

@section('action-content')

 <div class="row box-body">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <div class="panel-heading">Institute Profile </div>
                <div class="panel-body">
                     <!-- <php echo var_dump($instituteDtl);>-->
                    @foreach ($instituteDtl  as $instituteDtl)
                        <div class="row">
                           <div class="form-group"></div>
                          
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Institute Name <font color="red">*</font></label>

                            <div class="col-md-3">

                                 <input type="text" disabled value="{{ $instituteDtl->inst_name }}" class="form-control" name="ins_name" id="inst_name">

                            </div>

                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group">
                                <label for="ins_type" class="col-md-2 control-label">Institute Type<font color="red">*</font> </label>

                                <div class="col-md-3">

                                    <input type="text" disabled value="{{ $instituteDtl->type }}" class="form-control" name="type" id="type">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Location<font color="red">*</font>  </label>

                            <div class="col-md-3">
                                
                               <input type="text" disabled value="{{ $instituteDtl->location }}" class="form-control" name="location" id="location">

                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Address <font color="red">*</font> </label>

                                <div class="col-md-3">

                                    <input type="text" disabled value="{{ $instituteDtl->address }}" class="form-control" name="address" id="address">

                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Establishment Year  <font color="red">*</font></label>

                            <div class="col-md-3">
                                
                                <input type="text" disabled value="{{ $instituteDtl->est_year }}" class="form-control" name="est_year" id="est_year">

                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Total Acreage </label>

                                <div class="col-md-3">
                                    
                                    <input type="text" disabled value="{{ $instituteDtl->total_acr }}" class="form-control" name="total_acr" id="total_acr">

                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">National Accreditation  </label>

                            <div class="col-md-3">
                                
                                <input type="text" disabled value="{{ $instituteDtl->national_accre }}" class="form-control" name="national_accre" id="national_accre">
                                
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group">
                                <label for="name" class="col-md-2 control-label">International Accreditation  </label>

                                <div class="col-md-3">
                                   
                                    <input type="text" disabled value="{{ $instituteDtl->international_accre }}" class="form-control" name="international_accre" id="international_accre">

                                   
                                </div>
                            </div>
                        </div>
                         <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('website') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Website<font color="red">*</font>  </label>

                            <div class="col-md-3">
                                <input id="website" type="text" class="form-control" name="website" required value="{{ $instituteDtl->website }}" disabled>

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

                                     <textarea class="form-control" name="description" id="description" rows="5" required autofocus value="{{ $instituteDtl->description }}" disabled>{{ $instituteDtl->description }}</textarea>

                                </div>
                            </div>
                        </div>
                       @endforeach
                       <br>
                       <a href="{{ route('institute_list.index') }}" class="btn btn-warning pull-right">Back</a>
                </div>
           </div>

      </div>
   </div>

@endsection
