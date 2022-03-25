<?php

namespace App\Controllers;

use App\Models\P2021Model;
use App\Models\TooltipModel;

class P2021 extends BaseController
{
  protected $p2021Model;
  protected $tooltipModel;

  public function __construct()
  {
    $this->tooltipModel = new TooltipModel();
    $this->p2021Model = new P2021Model();
  }

  public function index()
  {
    $currentPage = $this->request->getVar('page_p2021') ? $this->request->getVar('page_p2021') : 1;

    $data = [
      'title' => 'Direktori Pendant Rilisan 2021 | ',
      'pdt' => $this->p2021Model->paginate(8, 'p2021'),
      'pager' => $this->p2021Model->pager,
      'currentPage' => $currentPage,
      'detail' => $this->tooltipModel->findColumn('detail'),
    ];
    return view('codex/pdt2021', $data);
  }

  public function detail($slug = false)
  {
    $data = [
      'title' => 'Detail Pendant | ',
      'pdt' => $this->p2021Model->getPdt($slug),
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
