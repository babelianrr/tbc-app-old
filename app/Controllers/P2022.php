<?php

namespace App\Controllers;

use App\Models\P2022Model;
use App\Models\TooltipModel;

class P2022 extends BaseController
{
	protected $p2022Model;
	protected $tooltipModel;

	public function __construct()
	{
		$this->tooltipModel = new TooltipModel();
		$this->p2022Model = new P2022Model();
	}

	public function index()
	{
		$currentPage = $this->request->getVar('page_p2022') ? $this->request->getVar('page_p2022') : 1;

		$data = [
			'title' => 'Direktori Pendant Rilisan 2022 | ',
			'pdt' => $this->p2022Model->paginate(8, 'p2022'),
			'pager' => $this->p2022Model->pager,
			'currentPage' => $currentPage,
			'detail' => $this->tooltipModel->findColumn('detail'),
		];
		return view('codex/pdt2022', $data);
	}

	public function detail($slug = false)
	{
		$data = [
			'title' => 'Detail Pendant | ',
			'pdt' => $this->p2022Model->getPdt($slug),
			'detail' => $this->tooltipModel->findColumn('detail'),
		];

		if (empty($data['pdt'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException(
				'Karakter bernama "' . $slug . '" tidak ditemukan.'
			);
		}

		return view("pendant/$slug", $data);
	}
}
