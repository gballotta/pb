<div class="form-group">
	{{ Form::label('name', 'Name') }}
	{{ Form::text('name', '', array('class' => 'form-control',
	                                'placeholder' => 'Babes name')) }}
</div>
<div class="form-group">
	{{ Form::label('surname', 'Surname') }}
	{{ Form::text('surname', '', array('class' => 'form-control',
	                                'placeholder' => 'Babes surname')) }}
</div>
<div class="form-group">
	{{ Form::label('realname', 'Real name (optional)') }}
	{{ Form::text('realname', '', array('class' => 'form-control',
	                                'placeholder' => 'Babes real name')) }}
</div>
<div class="form-group">
	{{ Form::label('birthdate', 'Birth date') }}
	{{ Form::text('birthdate', '', array('class' => 'form-control',
										 'id' => 'date')) }}
</div>
<div class="form-group">
	{{ Form::label('height', 'Height (centimeters)') }}
	{{ Form::number('height', '', array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('weight', 'Weight (kilograms)') }}
	{{ Form::number('weight', '', array('class' => 'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('breasts', 'Breasts (centimeters)') }}
	{{ Form::number('breasts', '', array('class' => 'form-control',
	                                     'id' => 'misuratette')) }}
	<a href="#" class="btn btn-primary" id="tette">Convert from inches to centimeters</a>
</div>
<div class="form-group">
	{{ Form::label('waist', 'Waist (centimeters)') }}
	{{ Form::number('waist', '', array('class' => 'form-control',
	                                     'id' => 'misuravita')) }}
	<a href="#" class="btn btn-primary" id="vita">Convert from inches to centimeters</a>
</div>
<div class="form-group">
	{{ Form::label('hips', 'Hips (centimeters)') }}
	{{ Form::number('hips', '', array('class' => 'form-control',
	                                     'id' => 'misurafianchi')) }}
	<a href="#" class="btn btn-primary" id="fianchi">Convert from inches to centimeters</a>
</div>
