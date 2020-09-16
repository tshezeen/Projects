@extends('master.facility_type.base')

@section('action-content')

 <div class="row box-body">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <div class="panel-heading">Add New Facility Type </div>
                <div class="panel-body">
                   <form class="form-horizontal" role="form" method="POST" action="{{ route('facility_type.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Facility Type </label>

                            <div class="col-md-4">
                                <input id="facility_type" type="text" class="form-control" name="facility_type" value="{{ old('facility_type') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                                
                                <a href="{{ route('facility_type.index') }}" class="btn btn-warning ">Cancel</a>

                            </div>
                           
                        </div>
                    </form>
                </div>
           </div>

      </div>
   </div>

@endsection
