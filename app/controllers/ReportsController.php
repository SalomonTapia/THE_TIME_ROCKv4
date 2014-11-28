<?php

class ReportsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /reports
	 *
	 * @return Response
	 */
	public function index()
	{
		$reports = Report::all();
		$this->layout->content = View::make('reports.index', compact('reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /reports/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->content = View::make('reports.create', compact('reports'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /reports
	 *
	 * @return Response
	 */
	public function store()
	{
		$input=Input::all();
		$input['user_id']=1;
		Report::create($input);
		return Redirect::route('reports.index')->with('message','La nueva noticia se ha creado');
	}

	/**
	 * Display the specified resource.
	 * GET /reports/{id}
	 *
	 * @param  Report $report
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Report $report)
	{
		$this->layout->content = View::make('reports.show', compact('report'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /reports/{id}/edit
	 *
	 * @param  Report $report
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Report $report)
	{
		$this->layout->content = View::make('reports.edit', compact('report'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /reports/{id}
	 *
	 * @param  Report $report
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Report $report)
	{
		$input = array_except(Input::all(), '_method');
		$report->update($input);
		$this->layout->content = View::make('reports.show', compact('report'))->with('message', 'Noticia actualizada');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /reports/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}