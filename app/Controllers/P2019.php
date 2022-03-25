<?php

namespace App\Controllers;

use App\Models\P2019Model;
use App\Models\TooltipModel;

class P2019 extends BaseController
{
  protected $p2019Model;
  protected $tooltipModel;

  public function __construct()
  {
    $this->tooltipModel = new TooltipModel();
    $this->p2019Model = new P2019Model();
  }

  public function index()
  {
    $currentPage = $this->request->getVar('page_p2019') ? $this->request->getVar('page_p2019') : 1;

    $data = [
      'title' => 'Direktori Pendant Rilisan 2019 | ',
      'pdt' => $this->p2019Model->paginate(8, 'p2019'),
      'pager' => $this->p2019Model->pager,
      'currentPage' => $currentPage,
      'detail' => $this->tooltipModel->findColumn('detail'),
    ];
    return view('codex/pdt2019', $data);
  }

  public function detail($slug = false)
  {
    $data = [
      'title' => 'Detail Pendant | ',
      'pdt' => $this->p2019Model->getPdt($slug),
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
