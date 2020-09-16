{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'TESS')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   
    <!-- <php echo session('user_id');?>;

    @foreach($user as $u)
         {{$u->name}}
         {{$u->uname}}
    @endforeach -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop