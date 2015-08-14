<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\AppController;

class SampleController extends AppController
{
	public function index()
	{
		\Redis::set('name', 'alegriaghost');
		$name = \Redis::get('name');
		\Redis::del('name');
		\Debugbar::info($name);
		\Debugbar::warning($name);
		\Debugbar::error($name);
		\Debugbar::addMessage($name, '$name');
		var_dump($name);
		\Redis::set('name1', 'alegriaghost1');
		\Redis::set('name2', 'alegriaghost2');
		\Redis::set('name3', 'alegriaghost3');
		$list = Redis::keys('*');
		$values = Redis::mget($list);
		var_dump($list);
		var_dump($values);
	}

	public function react()
	{
		$users = [
			'user_id' => '1',
			'user_name' => 'alegriaghost react',
			'address' => 'Shiga JP',
		];
		\Debugbar::info($users);

		return \Response::json($users);
	}

	public function riot()
	{
		$users = [
			'user_id' => '1',
			'user_name' => 'alegriaghost riot',
			'address' => 'Shiga JP',
		];
		\Debugbar::info($users);

		return \Response::json($users);
	}
}