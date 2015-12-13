<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\SectionValidationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Section;

class SectionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$sections = Section::paginate(10)->setPath('/admin/sections');
		//$users = User::simplePaginate(1);
		return view('admin.sections_show')->with('sections', $sections);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		
		return view('admin.sections_createupdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SectionValidationRequest $request)
	{
		//

		$sections = new Section;
		$sections->name = $request->input('name');
		$sections->save();

		return redirect('admin/sections')->with('message', 'La sección se ha creado correctamente');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

		
		$sections = Section::find($id);			
		return view('admin.sections_createupdate')->with(array('sections' => $sections));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, SectionValidationRequest $request)
	{
		//
		
		$sections = Section::find($id);
		$sections->name = $request->input('name');
		
		$sections->save();

		return redirect('admin/sections')->with('message', 'La sección se ha actualizado correctamente');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//

		$sections =  Section::find($id);
		$sections->delete();

		return redirect()->route('admin.sections.index')->with('message', 'Sección borrada');
	}

}