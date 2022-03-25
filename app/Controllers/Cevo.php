<?php

namespace App\Controllers;

use App\Models\CevoModel;
use App\Models\TooltipModel;

class Cevo extends BaseController
{
	protected $cevoModel;
	protected $tooltipModel;

	public function __construct()
	{
		$this->tooltipModel = new TooltipModel();
		$this->cevoModel = new CevoModel();
	}

	public function index()
	{
		$currentPage = $this->request->getVar('page_cevo') ? $this->request->getVar('page_cevo') : 1;

		$data = [
			'title' => 'Direktori Karakter Evolution | ',
			'card' => $this->cevoModel->paginate(8, 'cevo'),
			'pager' => $this->cevoModel->pager,
			'currentPage' => $currentPage,
			'detail' => $this->tooltipModel->findColumn('detail'),
		];
		return view('codex/evolution', $data);
	}

	public function detail($slug = false)
	{
		$data = [
			'title' => 'Detail Karakter | ',
			'card' => $this->cevoModel->getCard($slug),
			'detail' => $this->tooltipModel->findColumn('detail'),
		];

		if (empty($data['card'])) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException(
				'Karakter bernama "' . $slug . '" tidak ditemukan.'
			);
		}

		return view("character/$slug", $data);
	}
}
