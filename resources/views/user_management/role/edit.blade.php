@extends('user_management.role.base')

@section('action-content')

  <div class="row box-body">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <div class="panel-heading">Edit Role</div>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('role.update', ['id' => $roleId->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="row">
                        <div class="form-group"></div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
                            <label for="name" class="col-md-2 control-label">Role Name  </label>

                            <div class="col-md-3">
                                <input id="role_name" type="text" class="form-control" name="role_name" value="{{ $roleId->role_name }}" disabled>

                                 <input id="role_name" type="hidden" class="form-control" name="role_name" value="{{ $roleId->role_name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
                            <label for="name" class="col-md-2 control-label">Role Description  </label>

                            <div class="col-md-3">
                                <input id="role_desc" type="text" class="form-control" name="role_desc" value="{{ $roleId->role_desc }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>
                            <br>
                        <div class="form-group row">
                            <div class="col-md-8 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                
                                <a href="{{ route('role.index') }}" class="btn btn-warning ">Cancel</a>

                            </div>
                           
                        </div>
                    </form>
                </div>
           </div>

      </div>
   </div>

@endsection
