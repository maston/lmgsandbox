@extends('layouts.master')

@section('nav')
	@include('layouts.nav_main', [$nav_gameboard = 'active', $nav_grocery_run = '', $nav_metrics = '', $nav_settings = ''])
@stop

@section('kpi-bar')
	@include('layouts.kpi_main')
@stop

@section('content')
<!-- begin main content section -->
  <div class="col-md-6">
	<h3>You made it to the gameboard.</h3>
 
<!-- end main content section -->
@stop
