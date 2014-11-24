<?php

class OccationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /occations
	 *
	 * @return Response
	 */
	public function index()
	{
		$occations = Occation::all();
		$this->layout->content = View::make('occations.index', compact('occations'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /occations/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('occations.create', compact('occations'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /occations
	 *
	 * @return Response
	 */
	public function store()
	{
		$input=Input::all();
		$input['user_id']=1;
		Occation::create($input);
		return Redirect::route('occations.index')->with('message','El nuevo evento se ha creado');
	}

	/**
	 * Display the specified resource.
	 * GET /occations/{id}
	 *
	 * @param  Occation $occation
	 * @return Response
	 */
	public function show(Occation $occation)
	{
		//$occation = Occation::all();
		$this->layout->content = View::make('occations.show', compact('occations'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /occations/{id}/edit
	 *
	 * @param  Occation $occation
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Occation $occation)
	{
		$this->layout->content = View::make('occations.edit', compact('occations'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /occations/{id}
	 *
	 * @param  Occation $occation
	 * @return Response
	 */
	public function update(Occation $occation)
	{
		$input = array_except(Input::all(), '_method');
		$occation->update($input);
		$this->layout->content = View::make('occations.show', compact('occation'))->with('message', 'Evento actualizado');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /occations/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}