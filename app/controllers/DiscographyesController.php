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
		$discography = Discographye::all();
		$this->layout->content = View::make('discographyes.index', compact('discography'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /discographyes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('discographyes.create', compact('discography'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /discographyes
	 *
	 * 
	 * @return Response
	 */
	public function store()
	{
		$input=Input::all();
		$input['user_id']=1;
		Discographye::create($input);
		return Redirect::route('discographyes.index')->with('message','El nuevo evento se ha creado');
	}

	/**
	 * Display the specified resource.
	 * GET /discographyes/{id}
	 *
	 * @param  Discography $discography
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Discographye $discography)
	{
		$this->layout->content = View::make('discographyes.show', compact('discography'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /discographyes/{id}/edit
	 *
	 * @param  Discographye $discography
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Discographye $discography)
	{
		$this->layout->content = View::make('discographyes.edit', compact('discography'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /discographyes/{id}
	 *
	 * @param  Discographye $discography
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Discographye $discography)
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