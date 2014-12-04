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
	 * 
	 * @param Reportr $report
	 * @return Response
	 */
	public function store(Report $report)
	{
		$input=Input::all();
		$input['report_id'] = $report->id;
		$input['user_id'] = 1;
		Comentr::create($input);
		return Redirect::route('comentrs.create',$report->id)->with('Comentario guardado.');
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
		$this->layout->content = View::make('comentrs.show', compact('comentrs'));
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
		//
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
		//
	}

}