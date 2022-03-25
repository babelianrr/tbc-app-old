<?php

namespace App\Controllers;

use App\Models\C2022Model;
use App\Models\TooltipModel;

class C2022 extends BaseController
{
  protected $c2022Model;
  protected $tooltipModel;

  public function __construct()
  {
    $this->tooltipModel = new TooltipModel();
    $this->c2022Model = new C2022Model();
  }

  public function index()
  {
    $currentPage = $this->request->getVar('page_c2022') ? $this->request->getVar('page_c2022') : 1;

    $data = [
      'title' => 'Direktori Karakter 2022 | ',
      'card' => $this->c2022Model->paginate(8, 'c2022'),
      'pager' => $this->c2022Model->pager,
      'currentPage' => $currentPage,
      'detail' => $this->tooltipModel->findColumn('detail'),
    ];
    return view('codex/c2022', $data);
  }

  public function detail($slug = false)
  {
    $data = [
      'title' => 'Detail Karakter | ',
      'card' => $this->c2022Model->getCard($slug),
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
