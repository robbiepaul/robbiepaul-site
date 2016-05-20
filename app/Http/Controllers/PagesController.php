<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use SEO;

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
			'msg' => 'required',
		]);

		\Log::info($request->all());

		$data = $request->except('_token');
		$data['subject'] = 'Contact request';
		$data['phone'] = isset($data['phone']) ? $data['phone'] : 'n/a';
		$data['ip'] = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : 'unknown';

		\Mailgun::later(5, 'emails.contact', $data, function($message) use ($data)
		{
			$message->to('robbiepaul@me.com', 'Robbie Paul')->subject($data['subject']);
		});

		if($request->input('newsletter', 0) == 1) {
			\Mailgun::lists()->addMember('updates@robbiepaul.co', [
				'address' => $data['email']
			]);
		}

		return view('pages.thanks');
	}

	public function postNewsletter(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email'
		]);

		\Log::info($request->all());

		\Mailgun::lists()->addMember('updates@robbiepaul.co', [
			'address' => $request->input('email')
		]);

		return view('pages.thanks');
	}



}
