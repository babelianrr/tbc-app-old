<?php

namespace App\Controllers;

use App\Models\ForumModel;
use App\Models\UsersModel;

class Dashboard extends BaseController
{
  public function index()
  {
    $forumModel = new ForumModel();
    $usersModel = new UsersModel();

    $thread_count = $forumModel->countAllResults();
    $user_count = $usersModel->countAllResults();

    $category_thread = $forumModel->select('COUNT(thread.id) AS total, category.category AS category')
      ->join('category', 'thread.category_id=category.category_id')
      ->groupBy('thread.category_id')
      ->get();

    $user_age = $usersModel->select('YEAR(birth_date) AS age, COUNT(id) AS total')
      ->groupBy('YEAR(birth_date)')
      ->get();

    $datas = [
      'title' => 'Admin Dashboard | ',
      'thread_count' => $thread_count,
      'user_count' => $user_count,
      'category_thread' => $category_thread,
      'user_age' => $user_age,
    ];

    return view('dashboard/index', $datas);
  }

  public function giveaway()
  {
    $datas = [
      'title' => 'Pengundian Giveaway | '
    ];

    return view('dashboard/giveaway', $datas);
  }
}
