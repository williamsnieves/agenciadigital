<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

use App\Models\Section;
use App\Models\ContentPage;
use App\Models\Node;

use Input;
use Session;
class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()	{
		//die(Input::get('locale'));
		//Session::set('locale', 'en');

		//$about =  ContentPage::where("section_id", "=", "2")->get();
		$about = \DB::table('content_pages')->join('sections', 'content_pages.section_id', '=', 'sections.id')->where('sections.name', '=', 'about')->get();
		$choose = \DB::table('content_pages')->join('nodes', 'content_pages.id', '=', 'nodes.content_pages_id')->join('sections', 'content_pages.section_id', '=', 'sections.id')->where('sections.name', '=', 'choose')
		->select('content_pages.title','content_pages.subtitle','content_pages.title_en','content_pages.subtitle_en', 'nodes.title as title_node', 'nodes.title_en as title_en_node', 'nodes.subtitle as subtitle_node', 'nodes.subtitle_en as subtitle_en_node', 'nodes.description', 'nodes.description_en')
		->get();

		$service = \DB::table('content_pages')->join('nodes', 'content_pages.id', '=', 'nodes.content_pages_id')->join('sections', 'content_pages.section_id', '=', 'sections.id')->where('sections.name', '=', 'services')
		->select('content_pages.title','content_pages.subtitle','content_pages.title_en','content_pages.subtitle_en', 'nodes.title as title_node', 'nodes.title_en as title_en_node', 'nodes.subtitle as subtitle_node', 'nodes.subtitle_en as subtitle_en_node', 'nodes.description', 'nodes.description_en')
		->get();
		//return $service; 

		$sessionLang =Session::get('locale'); 
		if(!empty($sessionLang)){
			$lang = Session::get('locale');
		}else{
			Session::set('locale', 'en');
			$lang = Session::get('locale');
		}

		return view('pages.home')->with(array('lang' => $lang, 'about' => $about, 'choose' => $choose, 'service' => $service));
	}

	public function storecontact(ContactFormRequest $request){
		
		\Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('williamsnieves@gmail.com');
        $message->to('williamsnieves@gmail.com', 'Admin')->subject('Contacto 3wv');
    });

  		return redirect('/')->with('message', 'Gracias por contactarnos!!!');

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	}

	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
