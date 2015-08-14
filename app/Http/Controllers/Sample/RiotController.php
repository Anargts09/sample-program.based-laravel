<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\AppController;

class RiotController extends AppController
{
	public function riotApi()
	{
		$general = [
			'general' => 'general',
			'general2' => 'general2',
		];

		return \Response::json($general);
	}

	public function riotApi2()
	{
		$version = [
			'version' => 'ばーじょん',
		];

		return \Response::json($version);
	}
}