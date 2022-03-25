<?php

namespace App\Controllers;

use App\Models\C2021Model;
use App\Models\TooltipModel;

class C2021 extends BaseController
{
  protected $c2021Model;
  protected $tooltipModel;

  public function __construct()
  {
    $this->tooltipModel = new TooltipModel();
    $this->c2021Model = new C2021Model();
  }

  public function index()
  {
    $currentPage = $this->request->getVar('page_c2021') ? $this->request->getVar('page_c2021') : 1;

    $data = [
      'title' => 'Direktori Karakter 2021 | ',
      'card' => $this->c2021Model->paginate(8, 'c2021'),
      'pager' => $this->c2021Model->pager,
      'currentPage' => $currentPage,
      'detail' => $this->tooltipModel->findColumn('detail'),
    ];
    return view('codex/c2021', $data);
  }

  public function detail($slug = false)
  {
    $data = [
      'title' => 'Detail Karakter | ',
      'card' => $this->c2021Model->getCard($slug),
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
