<?php

namespace App\Controllers;

use App\Models\C2020Model;
use App\Models\TooltipModel;

class C2020 extends BaseController
{
  protected $c2020Model;
  protected $tooltipModel;

  public function __construct()
  {
    $this->tooltipModel = new TooltipModel();
    $this->c2020Model = new C2020Model();
  }

  public function index()
  {
    $currentPage = $this->request->getVar('page_c2020') ? $this->request->getVar('page_c2020') : 1;

    $data = [
      'title' => 'Direktori Karakter 2020 | ',
      'card' => $this->c2020Model->paginate(8, 'c2020'),
      'pager' => $this->c2020Model->pager,
      'currentPage' => $currentPage,
      'detail' => $this->tooltipModel->findColumn('detail'),
    ];
    return view('codex/c2020', $data);
  }

  public function detail($slug = false)
  {
    $data = [
      'title' => 'Detail Karakter | ',
      'card' => $this->c2020Model->getCard($slug),
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
