<?php

namespace App\Controllers;

use App\Models\C2019Model;
use App\Models\TooltipModel;

class C2019 extends BaseController
{
  protected $c2019Model;
  protected $tooltipModel;

  public function __construct()
  {
    $this->tooltipModel = new TooltipModel();
    $this->c2019Model = new C2019Model();
  }

  public function index()
  {
    $currentPage = $this->request->getVar('page_c2019') ? $this->request->getVar('page_c2019') : 1;

    $data = [
      'title' => 'Direktori Karakter 2019 | ',
      'card' => $this->c2019Model->paginate(8, 'c2019'),
      'pager' => $this->c2019Model->pager,
      'currentPage' => $currentPage,
      'detail' => $this->tooltipModel->findColumn('detail'),
    ];
    return view('codex/c2019', $data);
  }

  public function detail($slug = false)
  {
    $data = [
      'title' => 'Detail Karakter | ',
      'card' => $this->c2019Model->getCard($slug),
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
