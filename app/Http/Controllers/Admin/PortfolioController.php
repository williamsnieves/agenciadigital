<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Category;

class PortfolioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$portfolios = Portfolio::paginate(10)->setPath('/admin/portfolios');
		//$users = User::simplePaginate(1);
		return view('admin.portfolios_show')->with('portfolios', $portfolios);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$categories = Category::lists('name', 'id');
		return view('admin.portfolios_createupdate')->with(array('categories' => $categories));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//

		$categories  = $request->input('categories');

		$thumb = $request->file('url_thumb');
        $mainpic = $request->file('url_main_image');
        $id=null;

		$portfolios = new Portfolio;
		$portfolios->url_thumb = $request->input('url_thumb');
		$portfolios->url_main_image = $request->input('url_main_image');
		$portfolios->external_link = $request->input('external_link');
		$portfolios->url_facebook = $request->input('url_facebook');
		$portfolios->url_twitter = $request->input('url_twitter');
		$portfolios->url_instagram = $request->input('url_instagram');
		$portfolios->url_linkedin = $request->input('url_linkedin');

		
		if(!empty($categories) && $categories != 'default'){
			$portfolios->categories_id = $request->input('categories');
        }

        if(!empty($thumb) || isset($thumb)){
	        $path_thumb = $this->upload_thumb($id);  
	        $newpath = str_replace("\\", '/', $path_thumb);
	        $url = url().'/'.$newpath;
	        $portfolios->url_thumb = $url;
	    }

	    if(!empty($mainpic) || isset($mainpic)){
	        $picture_file = $this->upload_main($id);
	        $newpathpicture = str_replace("\\", '/', $picture_file);
	        $url_pic = url().'/'.$newpathpicture;
	        //die($url_pic);
	        $portfolios->url_main_image = $url_pic;
	    }

		$portfolios->save();

		return redirect('admin/portfolios')->with('message', 'El portafolio se ha creado correctamente');
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

		$categories = Category::lists('name', 'id');
		$portfolios = Portfolio::find($id);
		return view('admin.portfolios_createupdate')->with(array('portfolios' => $portfolios, 'categories' => $categories));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		//

		$categories  = $request->input('categories');

		$thumb = $request->file('url_thumb');
        $mainpic = $request->file('url_main_image');

		$portfolios = Portfolio::find($id);
		$portfolios->external_link = $request->input('external_link');
		$portfolios->url_facebook = $request->input('url_facebook');
		$portfolios->url_twitter = $request->input('url_twitter');
		$portfolios->url_instagram = $request->input('url_instagram');
		$portfolios->url_linkedin = $request->input('url_linkedin');

		
		if(!empty($categories) && $categories != 'default'){
			$portfolios->categories_id = $request->input('categories');
        }

        if(!empty($thumb) || isset($thumb)){
	        $path_thumb = $this->upload_thumb($id);  
	        $newpath = str_replace("\\", '/', $path_thumb);
	        $url = url().'/'.$newpath;
	        $portfolios->url_thumb = $url;
	    }

	    if(!empty($mainpic) || isset($mainpic)){
	        $picture_file = $this->upload_main($id);
	        $newpathpicture = str_replace("\\", '/', $picture_file);
	        $url_pic = url().'/'.$newpathpicture;
	        //die($url_pic);
	        $portfolios->url_main_image = $url_pic;
	    }

		$portfolios->save();

		return redirect('admin/portfolios')->with('message', 'El portafolio se ha editado correctamente');
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
		$portfolios =  Portfolio::find($id);
		$portfolios->delete();

		return redirect()->route('admin.portfolios.index')->with('message', 'Portafolios borrada');
	}

	public function upload_thumb($id){       
          //$file = array('file' => Input::file('curriculum_vitae'));
              // setting up rules
          //$rules = array('brochure' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
          // doing the validation, passing post data, rules and the messages
          if (Input::hasFile('url_thumb')) {
              $destinationPath = 'uploads'; // upload path
              $extension = Input::file('url_thumb')->getClientOriginalExtension(); // getting image extension
              $fileName = rand(11111,99999).'.'.$extension; // renameing image
              //$path = Input::file('curriculum_vitae')->move($destinationPath, $fileName)->getRealPath(); // uploading file to given path
              $path = Input::file('url_thumb')->move($destinationPath, $fileName)->getPathName(); // uploading file to given path
              //$path = Input::file('curriculum_vitae')->getRealPath();
              // sending back with message
              //Session::flash('success', 'Upload successfully'); 
              //return Redirect::to('users');            
              return $path;
          }else {
          // sending back with error message.
              Session::flash('error', 'uploaded file is not valid');
              
              if($id != null || $id != '')
                return Redirect::to('portfolios/'.$id."/edit");
              else
                return Redirect::to('portfolios/create');
          }

          /*$validator = Validator::make($file);
          if ($validator->fails()) {
            // send back to the page with the input data and errors
             die($validator);
            //return Redirect::to('users')->withInput()->withErrors($validator);
          }else {
            // checking file is valid.
            */
        
    }

    public function upload_main($id){       
          //$file = array('file' => Input::file('curriculum_vitae'));
              // setting up rules
          //$rules = array('brochure' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
          // doing the validation, passing post data, rules and the messages
          if (Input::hasFile('url_main_image')) {
              $destinationPath = 'uploads'; // upload path
              $extension = Input::file('url_main_image')->getClientOriginalExtension(); // getting image extension
              $fileName = rand(11111,99999).'.'.$extension; // renameing image
              //$path = Input::file('curriculum_vitae')->move($destinationPath, $fileName)->getRealPath(); // uploading file to given path
              $path = Input::file('url_main_image')->move($destinationPath, $fileName)->getPathName(); // uploading file to given path
              //$path = Input::file('curriculum_vitae')->getRealPath();
              // sending back with message
              //Session::flash('success', 'Upload successfully'); 
              //return Redirect::to('users');            
              return $path;
          }else {
          // sending back with error message.
              Session::flash('error', 'uploaded file is not valid');
              
              if($id != null || $id != '')
                return Redirect::to('portfolios/'.$id."/edit");
              else
                return Redirect::to('portfolios/create');
          }

          /*$validator = Validator::make($file);
          if ($validator->fails()) {
            // send back to the page with the input data and errors
             die($validator);
            //return Redirect::to('users')->withInput()->withErrors($validator);
          }else {
            // checking file is valid.
            */
        
    }

}
