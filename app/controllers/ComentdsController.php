<?php

class ComentdsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /comentds
	 *
	 * @return Response
	 */
	public function index()
	{
		$comentds = Comentd::all();
		$this->layout->content = View::make('comentds.index', compact('comentd'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /comentds/create
	 *
	 * 
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('comentds.create', compact('comentd'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /comentds
	 *
	 * @param Discographye $discography
	 * @return Response
	 */
	public function store(Discographye $discography)
	{
		$imput=Input::all();
		$imput['discography_id'] = $discography->id;
		$imput['user_id'] = 1;
		Comentd::create($imput);
		return Redirect::route('discographyes.show',$discography->id)->with('Comentario guardado');
	}

	/**
	 * Display the specified resource.
	 * GET /comentds/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->layout->content = View::make('discographyes.show', compact('comentd'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /comentds/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$this->layout->content = View::make('comentds.create', compact('comentd'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /comentds/{id}
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
	 * DELETE /comentds/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$coment = Comentd::find($id);
		$coment->delete();
		return Redirect::route('comentds.destroy', $coment->$id)->with('message', 'comentario eliminado');
	}

}