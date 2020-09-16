@extends('master.award_level.base')

@section('action-content')

  <div class="row box-body">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <div class="panel-heading">Edit Award Level</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('award.update', ['id' => $awardId->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-2 control-label">Award Level </label>

                            <div class="col-md-4">
                                <input id="award" type="text" class="form-control" name="award" value="{{ $awardId->award }}" required autofocus>

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
                                
                              
                            </div>
                           
                        </div>
                    </form>
                </div>
           </div>

      </div>
   </div>

@endsection
