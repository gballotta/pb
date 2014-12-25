@extends('layouts.jqueryui')

@section('content')

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{{ Form::open(array('url' => 'babe/create')) }}
    
    		@include('babes.form')
    
		{{ Form::close() }}
	</div>
</div>

@endsection()

@section('extrascripts')

<script>
	$( "#date" ).datepicker();
	
	$("#tette").click(function(e) {
		e.preventDefault();
		var misura = $("#misuratette").val();
		var misuraint = parseInt(misura);
		var misuracorretta = parseInt(misuraint * 2.54);
		$("#misuratette").val(misuracorretta);
	});
	$("#vita").click(function(e) {
		e.preventDefault();
		var misura = $("#misuravita").val();
		var misuraint = parseInt(misura);
		var misuracorretta = parseInt(misuraint * 2.54);
		$("#misuravita").val(misuracorretta);
	});
	$("#fianchi").click(function(e) {
		e.preventDefault();
		var misura = $("#misurafianchi").val();
		var misuraint = parseInt(misura);
		var misuracorretta = parseInt(misuraint * 2.54);
		$("#misurafianchi").val(misuracorretta);
	});
</script>

@endsection()
