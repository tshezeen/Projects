@extends('user_management.users.base')

@section('action-content')


 <div class="row box-body">
    <!-- <div class="col-lg-2"></div> -->
      <div class="col-lg-12">
          <div class="panel panel-primary">
                <div class="panel-heading">Add New User </div>
                <div class="panel-body">
                   <form method="POST" action="{{ route('users.store') }}">
                        {{ csrf_field() }}

                      
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Employee Name <font color="red">*</font></label>
                                <div class="col-md-3">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                          <div class="col-lg-1"></div>
                              <div class="form-group">
                                <label for="designation" class="col-md-2 control-label">Designation<font color="red">*</font> </label>

                                <div class="col-md-3">
                                  <input id="designation" type="text" class="form-control" name="designation"  required autofocus>

                                 </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                            <label for="name" class="col-md-2 control-label">User Name<font color="red">*</font>  </label>

                            <div class="col-md-3">
                                    
                                     <input id="uname" type="uname" class="form-control @error('uname') is-invalid @enderror" name="uname" value="{{ old('uname') }}" required autocomplete="uname">

                                    @error('uname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                        </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                                <label for="password" class="col-md-2 control-label">Password <font color="red">*</font> </label>

                                 <div class="col-md-3">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                                <label for="name" class="col-md-2 control-label">Confirm Password <font color="red">*</font></label>

                                <div class="col-md-3">
                                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="form-group">
                            <label for="role_name" class="col-md-2 col-form-label text-md-right">Role<font color="red">*</font></label>

                            <div class="col-md-3">
                                <select name="role_id" class="form-control" required autofocus> 
                                        <option value="">Select</option>
                                        @foreach ($roles as $roles)
                                            <option value="{{$roles->id}}">{{$roles->role_name}}</option>
                                        @endforeach
                                    </select>

                               
                                </div>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group"></div>
                           
                            <div class="form-group">
                             <label for="inst_name" class="col-md-2 col-form-label text-md-right">{{ __('Institute ') }}<font color="red">*</font></label>

                            <div class="col-md-3">
                                <select name="inst_id" class="form-control" required autofocus> 
                                        <option value="">Select</option>
                                        @foreach ($instList as $instList)
                                            <option value="{{$instList->id}}">{{$instList->inst_name}}</option>
                                        @endforeach
                                    </select>

                              
                            </div>
                        </div>
                            <div class="col-lg-1"></div>
                            
                        </div>
                       
                         <div class="row">
                             <div class="form-group"></div>
                            <div class="col-md-8 col-md-offset-3">
                                 <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                                
                                <a href="{{ route('users.index') }}" class="btn btn-warning ">Cancel</a>

                            </div>
                           
                           
                        </div>
                       
                    </form>


                </div>
           </div>

      </div>
   </div>

@endsection
