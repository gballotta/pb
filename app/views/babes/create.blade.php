@extends('layouts.jqueryui')

@section('content')

@if(sizeOf($errors) != 0)

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="alert alert-danger">
			<h4>Attenzione! Errori in immissione</h4>
			{{ HTML::ul($errors->all()) }}
		</div>
	</div>
</div>

@endif

@if(isset($messaggio))

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="alert alert-success">
			<h4>Positive!</h4>
			{{ $messaggio }}
		</div>
	</div>
</div>

@endif

<div class="row">
	<div class="col-md-4 col-md-offset-4">
		{{ Form::open(array('url' => 'babe/', 'files' => true)) }}
    
    		@include('babes.form')
    		{{ Form::submit('Submit Babe!', array('class' => 'btn btn-primary btn-large')) }}
    
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
