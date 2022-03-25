<?php

namespace App\Controllers;

use App\Models\CawkModel;
use App\Models\TooltipModel;

class Cawk extends BaseController
{
  protected $cawkModel;
  protected $tooltipModel;

  public function __construct()
  {
    $this->tooltipModel = new TooltipModel();
    $this->cawkModel = new CawkModel();
  }

  public function index()
  {
    $currentPage = $this->request->getVar('page_cawk') ? $this->request->getVar('page_cawk') : 1;

    $data = [
      'title' => 'Direktori Karakter Awaken | ',
      'card' => $this->cawkModel->paginate(8, 'cawk'),
      'pager' => $this->cawkModel->pager,
      'currentPage' => $currentPage,
      'detail' => $this->tooltipModel->findColumn('detail'),
    ];
    return view('codex/awaken', $data);
  }

  public function detail($slug = false)
  {
    $data = [
      'title' => 'Detail Karakter | ',
      'card' => $this->cawkModel->getCard($slug),
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
