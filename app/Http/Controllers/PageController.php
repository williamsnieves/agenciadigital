<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

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
		$sessionLang =Session::get('locale'); 
		if(!empty($sessionLang)){
			$lang = Session::get('locale');
		}else{
			Session::set('locale', 'en');
			$lang = Session::get('locale');
		}

		return view('pages.home')->with(array('lang' => $lang));
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
