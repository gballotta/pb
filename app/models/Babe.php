<?php

class Babe extends Eloquent {
	public static $valRules = array('name' => 'required',
									'surname' => 'required',
									'birthdate' => 'required|date',
									'height' => 'integer',
									'weight' => 'integer',
									'breasts' => 'integer',
									'waist' => 'integer',
									'hips' => 'integer',
									'shoesize' => 'integer',
									'naturalboobs' => 'boolean',
									'fucks' => 'boolean',
									'photofile' => 'image',
									'breastsize' => 'required|max:1');
	
	public static $breastSizes = array('A' => 3,
									   'B' => 5,
									   'C' => 8,
									   'D' => 10,
									   'E' => 13,
									   'F' => 15,
									   'G' => 18,
									   'H' => 20,
									   'I' => 23,
									   'J' => 25,
									   'K' => 28,
									   'L' => 30,
									   'M' => 33,
									   'N' => 36,
									   'O' => 38,
									   'P' => 41);
}
