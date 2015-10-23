@extends('master')

@section('content')
	@if (Session::has('message'))
		<div class="alert">{{ Session::get('message') }}</div>
	@endif
	<h1>Only Registered Users May Enter</h1>
@endsection