<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\PagesValidationRequest;
use App\Models\ContentPage;
use App\Models\Gallery;
use App\Models\Section;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pages = ContentPage::paginate(10)->setPath('/admin/pages');
		//$users = User::simplePaginate(1);
		return view('admin.pages_show')->with('pages', $pages);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$gallery = Gallery::lists('name', 'id');
		$section = Section::lists('name', 'id');
		return view('admin.pages_createupdate')->with(array('galleries' => $gallery, 'sections' => $section));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PagesValidationRequest $request)
	{
		//

		$pages = new ContentPage;		

		$pages->name = $request->input('name');
		$pages->title = $request->input('title');
		$pages->subtitle = $request->input('subtitle');
		$pages->content = $request->input('content');
		$pages->title_en = $request->input('title_en');
		$pages->subtitle_en = $request->input('subtitle_en');
		$pages->content_en = $request->input('content_en');		

		if($request->input('galleries') != 'default'){
			$galleryId = Gallery::find($request->input('galleries'));
			$pages->galleries()->associate($galleryId);			
		}

		if($request->input('name') == 'nosotros')
			$pages->link =  'about';

		if($request->input('name') == 'sedes')
			$pages->link =  'locations';

		if($request->input('name') == 'social')
			$pages->link =  'social';

		$pages->save();	

		return redirect('admin/pages')->with('message', 'La sección se ha creado correctamente');
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

		$page = ContentPage::find($id);
		$gallery = Gallery::lists('name', 'id');
		return view('admin.pages_createupdate')->with(array('page' => $page, 'galleries' => $gallery));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, PagesValidationRequest $request)
	{
		//

		$pages =  ContentPage::find($id);
		$galleryId = Gallery::find($request->input('galleries'));
		$pages->name = $request->input('name');
		$pages->title = $request->input('title');
		$pages->subtitle = $request->input('subtitle');
		$pages->content = $request->input('content');
		$pages->title_en = $request->input('title_en');
		$pages->subtitle_en = $request->input('subtitle_en');
		$pages->content_en = $request->input('content_en');

		if($request->input('name') == 'nosotros')
			$pages->link =  'about';

		if($request->input('name') == 'sedes')
			$pages->link =  'locations';

		if($request->input('name') == 'social')
			$pages->link =  'social';

		if($request->input('galleries') != 'default'){
			$galleryId = Gallery::find($request->input('galleries'));
			$pages->galleries()->associate($galleryId);			
		}


		$pages->save();

		return redirect()->route('admin.pages.index', ['pages' => $id])->with('message', 'Sección actualizada');
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
		$pages =  ContentPage::find($id);
		$pages->delete();

		return redirect()->route('admin.pages.index')->with('message', 'Sección borrada');
	}

}
