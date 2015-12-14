<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriesValidationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Brand;
use App\Models\CustomImage;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$categories = Category::paginate(10)->setPath('/admin/categories');
		//$users = User::simplePaginate(1);
		return view('admin.categories_show')->with('categories', $categories);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		
		return view('admin.categories_createupdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CategoriesValidationRequest $request)
	{
		//

	
		$categories = new Category;
		$categories->name = $request->input('name');

		$categories->save();

		return redirect('admin/categories')->with('message', 'La categoría se ha creado correctamente');
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

	
		$category = Category::find($id);			
		return view('admin.categories_createupdate')->with(array('category' => $category));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, CategoriesValidationRequest $request)
	{
		//
		
		
		$categories = Category::find($id);
		$categories->name = $request->input('name');

		$categories->save();

		return redirect('admin/categories')->with('message', 'La categoría se ha actualizado correctamente');
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

		$categories =  Category::find($id);
		$categories->delete();

		return redirect()->route('admin.categories.index')->with('message', 'Categoría borrada');
	}

}
