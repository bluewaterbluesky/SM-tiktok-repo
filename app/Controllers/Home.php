<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title'		=> 'SM Tiktok Promo',
			'content'	=> 'pages/home/index',
			'js'		=> 'js/home.js'
		];

		return view('home', $data);
	}
}