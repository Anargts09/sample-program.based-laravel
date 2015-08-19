<?php

namespace App\Http\Controllers\Riot;

use App\Http\Controllers\AppController;

class RiotHtmlController extends AppController
{
	protected $url;

	public function index()
	{
		//
		$data = [
			'url' => route('riot-html'),
		];
		return view('riot-html.index', $data);
	}
}