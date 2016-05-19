<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{
		$last = \App\Blog::lastPosts(2);
		return view('pages.home', compact('last'));
	}

	public function about()
	{
		$age = Carbon::createFromDate(1983, 8, 11, 'GMT')->age;

        return view('pages.about', compact('age'));
	}

	public function skills()
	{
		return view('pages.skills');
	}

	public function projects()
	{
		return view('pages.projects');
	}

	public function contact()
	{
		return view('pages.contact');
	}

	public function postContact(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required',
		]);

		\Log::info($request->all());

		return view('pages.thanks');
	}

	public function postNewsletter(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email'
		]);

		\Log::info($request->all());

		return view('pages.thanks');
	}



}
