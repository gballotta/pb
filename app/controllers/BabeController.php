<?php

class BabeController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() {
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {
		return View::make('babes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() {
		$validation = Validator::make(Input::all(), Babe::$valRules);
		if ($validation -> fails()) {
			return Redirect::to('/babe/create')->withInput()->withErrors($validation);
		} else {

			$naturali = true;
			if (Input::get('naturalboobs') == null) {
				$naturali = false;
			}

			$scopa = true;
			if (Input::get('fucks') == null) {
				$scopa = false;
			}
			
			$misuracoppa = strtoupper(Input::get('breastsize'));
			
			$nuBabe = new Babe();
			$nuBabe -> name = Input::get('name');
			$nuBabe -> surname = Input::get('surname');
			$nuBabe -> birthdate = Input::get('birthdate');
			$nuBabe -> realname = Input::get('realname');
			$nuBabe -> height = Input::get('height');
			$nuBabe -> weight = Input::get('weight');
			$nuBabe -> breasts = Input::get('breasts');
			$nuBabe -> waist = Input::get('waist');
			$nuBabe -> hips = Input::get('hips');
			$nuBabe -> shoesize = Input::get('shoesize');
			$nuBabe -> naturalboobs = $naturali;
			$nuBabe -> fucks = $scopa;
			$nuBabe -> photofile = Input::file('photofile') -> getClientOriginalName();
			$nuBabe -> breastsize = $misuracoppa;
			$nuBabe -> save();
			
			Input::file('photofile') -> move(__DIR__ . '/storage/', Input::file('photofile') -> getClientOriginalName());
			
			return Redirect::to('/babe/create')->with('messaggio', 'Babe successfully created!');
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) {
		//
	}

}
