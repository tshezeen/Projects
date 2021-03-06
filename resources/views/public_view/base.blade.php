
@section('content')
     <div class="row box-body">
          <div class="col-md-12 col-lg-12">
              <h4 class="page-head-line">
                 Tertiary Education Institute Records 
                  <small>
                      <i class="ace-icon fa fa-angle-double-right"></i>
                      Details 
                  </small>
              </h4>
          </div>
      </div>
       @include('common/message')
      <div class="row">
          <div class="col-lg-12">
              @yield('action-content')
           </div>
        </div>      
    <!-- /.content -->

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')


<script> 
      $(document).ready(function() {

            $('#tbl').DataTable();

            
            } );
      

    console.log(''); </script>
@stop
