<?php

class DiscographyesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /discographyes
	 *
	 * @return Response
	 */
	public function index()
	{
		$discographyes = Discographye::all();
		$this->layout->content = View::make('discographyes.index', compact('discographyes'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /discographyes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('discographyes.create', compact('discographyes'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /discographyes
	 * 
	 * @return Response
	 */
	public function store()
	{
		$input=Input::all();
		$input['user_id']=1;
		Discographye::create($input);
		return Redirect::route('discographyes.index')->with('message','La nueva Discografía se ha Creado');
	}

	/**
	 * Display the specified resource.
	 * GET /discographyes/{id}
	 *
	 * @param  Discography $discography
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Discography $discography)
	{
		$this->layout->content = View::make('discographyes.show', compact('discographyes'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /discographyes/{id}/edit
	 *
	 * @param  Discography $discography
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Discography $discography)
	{
		$this->layout->content = View::make('discographyes.edit', compact('discographyes'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /discographyes/{id}
	 *
	 * @param  Discography $discography
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Discography $discography)
	{
		$input = array_except(Input::all(), '_method');
		$discography->update($input);
		$this->layout->content = View::make('discographyes.show', compact('discography'))->with('message', 'Discografía actualizada');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /discographyes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}