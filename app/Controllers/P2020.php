<?php

namespace App\Controllers;

use App\Models\P2020Model;
use App\Models\TooltipModel;

class P2020 extends BaseController
{
  protected $p2020Model;
  protected $tooltipModel;

  public function __construct()
  {
    $this->tooltipModel = new TooltipModel();
    $this->p2020Model = new P2020Model();
  }

  public function index()
  {
    $currentPage = $this->request->getVar('page_p2020') ? $this->request->getVar('page_p2020') : 1;

    $data = [
      'title' => 'Direktori Pendant Rilisan 2020 | ',
      'pdt' => $this->p2020Model->paginate(8, 'p2020'),
      'pager' => $this->p2020Model->pager,
      'currentPage' => $currentPage,
      'detail' => $this->tooltipModel->findColumn('detail'),
    ];
    return view('codex/pdt2020', $data);
  }

  public function detail($slug = false)
  {
    $data = [
      'title' => 'Detail Pendant | ',
      'pdt' => $this->p2020Model->getPdt($slug),
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
