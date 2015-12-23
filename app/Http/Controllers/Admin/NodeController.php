<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\NodesValidationRequest;
use Illuminate\Http\Request;
use App\Models\Node;
use App\Models\ContentPage;

class NodeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$nodes = Node::paginate(10)->setPath('/admin/nodes');
		//$users = User::simplePaginate(1);
		return view('admin.nodes_show')->with('nodes', $nodes);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$pages = ContentPage::all();
		return view('admin.nodes_createupdate')->with('pages', $pages);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(NodesValidationRequest $request)
	{
		//
		
		$nodes = new Node;
		$nodes->name_node = $request->input('name_node');
		$nodes->title = $request->input('title');
		$nodes->subtitle = $request->input('subtitle');
		$nodes->description = $request->input('description');

		$nodes->title_en = $request->input('title_en');
		$nodes->subtitle_en = $request->input('subtitle_en');
		$nodes->description_en = $request->input('description_en');

		if($request->input('pages') != 'default'){
			$pages = ContentPage::find($request->input('pages'));
			$nodes->pages()->associate($pages);
		}else{
			return redirect('admin/nodes/create')->with('customexception', 'Debes asociar el nodo a una página');
		}
		

		$nodes->save();

		return redirect('admin/nodes')->with('message', 'El nodo se ha creado correctamente');
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
		//$pages = Node::with('page')->get();
		$pages = ContentPage::lists('name', 'id');
		$node = Node::find($id);
		//$pages = $node->pages;

		//print_r($node);		
		return view('admin.nodes_createupdate')->with(array('node' => $node, 'pages' => $pages));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, NodesValidationRequest $request)
	{
		//

		
		$nodes = Node::find($id);
		$nodes->name_node = $request->input('name_node');
		$nodes->title = $request->input('title');
		$nodes->subtitle = $request->input('subtitle');
		$nodes->description = $request->input('description');

		$nodes->title_en = $request->input('title_en');
		$nodes->subtitle_en = $request->input('subtitle_en');
		$nodes->description_en = $request->input('description_en');
		

		if($request->input('pages') != 'default'){
			$pagesId = ContentPage::find($request->input('pages'));
			$nodes->pages()->associate($pagesId);
		}else{
			return redirect('admin/nodes/create')->with('customexception', 'Debes asociar el nodo a una página');
		}

		$nodes->save();

		return redirect()->route('admin.nodes.index')->with('message', 'Nodo actualizado');
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

		$nodes =  Node::find($id);
		$nodes->delete();

		return redirect()->route('admin.nodes.index')->with('message', 'Nodo borrado');
	}

}
