@extends('master.academic_year.base')

@section('action-content')

  <div class="row box-body">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <div class="panel-heading">Edit Academic Year</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('academic.update', ['id' => $academicId->id]) }}">


                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <!-- <input type="hidden" value="{{$academicId->id}}" name="id"> -->
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Academic Year </label>

                            <div class="col-md-4">
                                <input id="name" type="text" class="form-control" name="academic_year" value="{{ $academicId->academic_year }}" required autofocus>

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
                                    Update
                                </button>
                                
                                <a href="{{ url('academic_year.index') }}" class="btn btn-warning ">Cancel</a>
                            </div>
                            
                            
                        </div>
                    </form>
                </div>
           </div>

      </div>
   </div>

@endsection
