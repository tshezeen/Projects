@extends('adminlte::page')

@section('content')
 

     <div class="row box-body">
          <div class="col-md-12 col-lg-12">
              <h4 class="page-head-line">
                 Change Password
                 
              </h4>
          </div>
      </div>
       @include('common/message')
      <div class="row">
          <div class="col-lg-12">
               <div class="row box-body">
                    <div class="col-lg-12">

                        <div class="panel panel-primary">
                          <div class="panel-heading">
                              Change Password
                          </div> 
                       
                        <!-- <div class="panel-heading"></div> -->
                            <div class="panel-body">
                              <!--  <form method="POST" action="{{ route('login') }}"> -->
                                <form class="form-horizontal" role="form" method="POST" action="{{ route('change_pwd.store') }}">
                                  @csrf

                                  <div class="form-group row">
                                      <label for="old_password" class="col-md-4 col-form-label text-md-right">{{ __('Old Password') }}</label>

                                      <div class="col-md-6">
                                           <input id="password" name="old_password" type="password" class="form-control" required autofocus>

                                          @error('uname')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                                      <div class="col-md-6">
                                           <input id="new_password" name="new_password" type="password" class="form-control" required autofocus>

                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>
                                   <div class="form-group row">
                                      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm New Password') }}</label>

                                      <div class="col-md-6">
                                          <input id="new_confirm_password" name="new_confirm_password" type="password" class="form-control" required autofocus>

                                          @error('password')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                      </div>
                                  </div>

                                  <div class="form-group row mb-0">
                                    <div class="col-md-4 ">
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Change Password') }}
                                        </button>


                                    </div>
                                </div>
                              </form>
                             </div>
                         </div>

                    </div>
                 </div>
           </div>
        </div>      
    <!-- /.content -->
 
@endsection