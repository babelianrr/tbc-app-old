<?php

namespace App\Controllers;

use App\Models\TooltipModel;

class Codex extends BaseController
{
	protected $tooltipModel;
	public function __construct()
	{
		$this->tooltipModel = new TooltipModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Direktori Karakter | ',
		];
		return view('codex/character', $data);
	}

	public function pendant()
	{
		$data = [
			'title' => 'Direktori Pendant | ',
		];
		return view('codex/pendant', $data);
	}
}
