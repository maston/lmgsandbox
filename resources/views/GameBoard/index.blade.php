@extends('layouts.master')

@section('nav')
	@include('layouts.nav', [$nav_gameboard = 'active', $nav_grocery_run = '', $nav_metrics = '', $nav_settings = ''])
@stop

@section('content')
<!-- begin main content section -->
  <div class="col-md-6">
	<h3>You made it to the gameboard.</h3>
 
<!-- end main content section -->
@stop
