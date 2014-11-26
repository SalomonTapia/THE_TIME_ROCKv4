<?php

class ComentsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /coments
	 *
	 * @return Response
	 */
	public function index()
	{
		$coments = Coment::all();
		$this->layout->content = View::make('coments.index', compact('coments'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /coments/create
	 *
	 * @return Response
	 */
	public function create()
	{
<<<<<<< HEAD
		$this->layout->content = View::make('coments.create', compact('coment'));
=======
		$this->layout->content = View::make('coments.create', compact('coments'));
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /coments
	 *
	 * @param Occation $occation
	 * @return Response
	 */
<<<<<<< HEAD
	public function store(Occation $occation)
=======
	public function store()
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
	{
		$imput=Input::all();
		$imput['occation_id'] = $occation->id;
		$imput['user_id'] = 1;
		Coment::create($imput);
<<<<<<< HEAD
		return Redirect::route('occations.show',$occation->id)->with('Comentario guardado');
=======
		return Redirect::route('occations.show',$occation->id)->with('Comentario guardado.');
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
	}

	/**
	 * Display the specified resource.
	 * GET /coments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
<<<<<<< HEAD
		$this->layout->content = View::make('coments.show', compact('coment'));
=======
		$this->layout->content = View::make('coments.show', compact('coments'));
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /coments/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->layout->content = View::make('coments.edit', compact('coment'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /coments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /coments/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$coment = Coment::find($id);
		$coment->delete();
<<<<<<< HEAD
		return Redirect::route('coments.destroy', $coment->$id)->with('message', 'comentario eliminado');
=======
		return Redirect::route('coments.destroy', $coments->$id)->with('message', 'comentario eliminado');
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
	}

}