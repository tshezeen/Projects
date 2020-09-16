@extends('record_dtls.base')
@section('action-content')
     <div class="row box-body">
        <div class="col-lg-12">
        
         <!--   <div class="row box-body">
            <div class="col-md-12 col-lg-12">
                <h4 class="page-head-line">
                   Record
                    <small>
                        <i class="ace-icon fa fa-angle-double-right"></i>
                       fdgfdh 
                    </small>
                </h4>
            </div>
        </div> -->
        <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-tabs">
             <?php
                      $user_session=session('role_name');
                    ?>
              @if ($user_session =='tei' || $user_session =='dahe')

                <li class="active"><a href="#po" data-toggle="tab">Programmes Offered </a></li>
                <li><a href="#fees" data-toggle="tab">Fee Structures</a></li>

                @endif

                <li><a href="#as" data-toggle="tab">Academic Staff</a></li>
                <li><a href="#ns" data-toggle="tab">Non-Academic Staff</a></li>
               

                @if ($user_session =='tei' || $user_session =='dahe')
                <li><a href="#facilities" data-toggle="tab">Facilities</a></li>
                <li><a href="#funding" data-toggle="tab">Funding Source</a></li>
                <li><a href="#acastd" data-toggle="tab">Academic Wise Stds</a></li>
                <li><a href="#bulkstd" data-toggle="tab">Total Number of Students</a></li>
                <li><a href="#collaboration" data-toggle="tab">Collaborations</a></li> 
				@endif

                @if ($user_session =='ovc' || $user_session =='dahe')
                 <li><a href="#sp" data-toggle="tab">Staff Profile</a></li>
                @endif

            
          </ul>

          <div class="tab-content">
		  @if ($user_session =='dahe' || $user_session =='tei')
            <div id="po" class="tab-pane fade in active">
          
                <!-- yield('program-offered') -->
                 @include('record_dtls.program_offered.index')
                  
  
            </div>
		@endif
             <div id="fees" class="tab-pane fade">
                
                    @include('record_dtls.fee_structure.index')
                  <!--  <php echo var_dump($feeStructureList);> -->
      
              </div> 
			  <div id="as" class="tab-pane fade ">
                
                    @include('record_dtls.academic_staff.index')
                
              </div>
			@if ($user_session =='ovc')
               <div id="as" class="tab-pane fade in active">
                
                    @include('record_dtls.academic_staff.index')
                
              </div>
			  @endif
              <div id="ns" class="tab-pane fade">
                
                    @include('record_dtls.non_academic_staff.index')
                
              </div>
              <div id="facilities" class="tab-pane fade">
                
                    @include('record_dtls.facilities.index')
                
              </div>

              <div id="funding" class="tab-pane fade">
                
                    @include('record_dtls.funding_source.index')
                
              </div>

              <div id="acastd" class="tab-pane fade">
                
                    @include('record_dtls.academic_wise_dtls.index')
                
              </div>

              <div id="bulkstd" class="tab-pane fade">
                
                    @include('record_dtls.bulk_std_dtls.index')
                
              </div>

               <div id="collaboration" class="tab-pane fade">
                
                    @include('record_dtls.collaboration.index')
                
              </div>
               
                <div id="sp" class="tab-pane fade">
                
                    @include('record_dtls.staff_profile.index')
                
              </div>
            

          </div><!-- end of tab -->
        </div>
      </div>
 
      </div>
   </div>

 
@endsection 


<script src="{{ asset('vendor/adminlte/dist/js/jquery.min.js') }}"></script>



