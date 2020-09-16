@extends('record_dtls.academic_staff.base')

@section('action-content')

 <div class="row box-body">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <div class="panel-heading">Add New Academic Staff Details </div>
                <div class="panel-body">
                   <form role="form" method="POST" action="{{ route('program.store') }}">
                        {{ csrf_field() }}

                      
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Program Name <font color="red">*</font></label>

                            <div class="col-md-3">
                                <input id="program" type="text" class="form-control" name="program" value="{{ old('program') }}" required autofocus>

                                @if ($errors->has('program'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('program') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                                <div class="form-group{{ $errors->has('award_id') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-2 control-label">Award Level <font color="red">*</font> </label>

                                <div class="col-md-3">
                                    <select name="award_id" class="form-control"> 
                                        <option value="">Select</option>
                                        @foreach ($awardList as $awardList)
                                            <option value="{{$awardList->id}}">{{$awardList->award}}</option>
                                        @endforeach
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
                           
                            <div class="form-group{{ $errors->has('mode') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Mode<font color="red">*</font>  </label>

                            <div class="col-md-3">
                               <select name="mode_id" class="form-control"> 
                                        <option value="">Select</option>
                                        @foreach ($modeList as $modeList)
                                            <option value="{{$modeList->id}}">{{$modeList->mode}}</option>
                                        @endforeach
                                    </select>

                                @if ($errors->has('mode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group{{ $errors->has('affiliation') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-2 control-label">Affiliation <font color="red">*</font> </label>

                                <div class="col-md-3">
                                    
                                    <input id="affiliation" type="text" class="form-control" name="affiliation" value="{{ old('affiliation') }}" required autofocus>

                                    @if ($errors->has('affiliation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('affiliation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group{{ $errors->has('cat_id') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Discipline (broad area of study)  <font color="red">*</font></label>

                            <div class="col-md-3">
                                <select name="cat_id" class="form-control"> 
                                     <option value="">Select</option>
                                         @foreach ($catList as $catList)
                                            <option value="{{$catList->id}}">{{$catList->category}}</option>
                                        @endforeach
                                    </select>

                                @if ($errors->has('cat_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cat_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label"> Programme Tuition Fee per Annum </label>

                                <div class="col-md-3">
                                    
                                    <input id="program_fee" type="numeric" class="form-control" name="program_fee">

                                   
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
