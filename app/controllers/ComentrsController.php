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
		$comentrs = Coment::all();
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
		$this->layout->content = View::make('comentrs.create', compact('comentr'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /comentrs
	 *
	 * @param Report $report
	 * 
	 * @return Response
	 */
	public function store(Report $report)
	{
		$imput=Input::all();
		$imput['report_id'] = $report->id;
		$imput['user_id'] = 1;
		Comentr::create($imput);
		return Redirect::route('reports.show',$report->id)->with('Comentario guardado.');
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
		$this->layout->content = View::make('comentrs.show', compact('comentr'));
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
		$this->layout->content = View::make('comentrs.edit', compact('comentr'));
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
		$coment = Coment::find($id);
		$coment->delete();
		return Redirect::route('comentrs.destroy', $coment->$id)->with('message', 'comentario eliminado');
	}

}