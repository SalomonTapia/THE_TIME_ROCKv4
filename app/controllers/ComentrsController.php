<?php

class ComentrsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /comentrs
	 *
	 * @return Response
	 */
	public function index()
	{
		$coments = Comentr::all();
		$this->layout->content = View::make('comentrs.index', compact('comentrs'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /comentrs/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('comentrs.create', compact('comentrs'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /comentrs
<<<<<<< HEAD
	 *
	 * @param Report $report
=======
	 * 
	 * Reportr $report
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
	 * @return Response
	 */
	public function store()
	{
		$imput=Input::all();
		$imput['report_id'] = $report->id;
		$imput['user_id'] = 1;
<<<<<<< HEAD
		Coment::create($imput);
		return Redirect::route('reportrs.show',$report->id)->with('Comentario guardado.');
=======
		Comentr::create($imput);
		return Redirect::route('reports.show',$report->id)->with('Comentario guardado.');
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
	}

	/**
	 * Display the specified resource.
	 * GET /comentrs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
<<<<<<< HEAD
		$this->layout->content = View::make('comentrs.show', compact('comentrs'));
=======
		//
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /comentrs/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
<<<<<<< HEAD
		$this->layout->content = View::make('comentrs.edit', compact('coment'));
=======
		//
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /comentrs/{id}
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
	 * DELETE /comentrs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
<<<<<<< HEAD
		$comentr = Coment::find($id);
		$comentr->delete();
		return Redirect::route('comentrs.destroy', $comentrs->$id)->with('message', 'comentario eliminado');
=======
		//
>>>>>>> 0e427d60730f5eb9e21e12d618fbea0e7f0cc6fe
	}

}