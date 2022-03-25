<?php

namespace App\Controllers;

use App\Models\TooltipModel;
use App\Models\ViewRatingModel;

class Home extends BaseController
{
	public function __construct()
	{
		$this->tooltipModel = new TooltipModel();
	}

	public function index()
	{
		$viewratingModel = new ViewRatingModel();
		$top_thread = $viewratingModel->select('thread.id, thread.thread_title, view_rating.thread_id, view_rating.sum_star, view_rating.count_star, view_rating.rating')
			->join('thread', 'thread.id=view_rating.thread_id', 'left')
			->orderBy('view_rating.rating', 'DESC')
			->orderBy('view_rating.sum_star', 'DESC')
			->get(10, 0);

		$data = [
			'title' => 'Home | ',
			'top_thread' => $top_thread
		];
		return view('home/index', $data);
	}

	public function about()
	{
		$data = [
			'title' => 'About | ',
		];
		return view('home/about', $data);
	}

	public function contact()
	{
		$data = [
			'title' => 'Contact | ',
		];
		return view('home/contact', $data);
	}
}
