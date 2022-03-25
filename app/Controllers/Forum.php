<?php

namespace App\Controllers;

use \App\Models\ForumModel;
use \App\Models\CategoryModel;
use \App\Models\UsersModel;
use \App\Models\ReplyModel;
use \App\Models\RatingModel;
use \App\Models\ViewRatingModel;

class Forum extends BaseController
{
  public function __construct()
  {
    helper(['form']);
    $this->validation = \Config\Services::validation();
    $this->session = session();
  }

  public function index()
  {
    $page = 1;
    $keyword = '';

    if ($this->request->getPost()) {
      $keyword = $this->request->getPost('keyword');
    }

    if ($this->request->getGet()) {
      $page = $this->request->getGet('page');
    }
    $perPage = 10;
    $limit = $perPage;
    $offset = ($page - 1) * $perPage;

    $forumModel = new ForumModel();
    $threads = $forumModel->select('thread.id, thread.thread_title, category.category, users.name, view_rating.count_star, view_rating.rating')
      ->join('category', 'thread.category_id=category.category_id', 'left')
      ->join('users', 'thread.created_by=users.id', 'left')
      ->join('view_rating', 'thread.id=view_rating.thread_id', 'left')
      ->like('thread.thread_title', $keyword)
      ->get($limit, $offset);

    $total = $forumModel->select('thread.id, thread.thread_title, category.category, users.name, view_rating.count_star, view_rating.rating')
      ->join('category', 'thread.category_id=category.category_id', 'left')
      ->join('users', 'thread.created_by=users.id', 'left')
      ->join('view_rating', 'thread.id=view_rating.thread_id', 'left')
      ->like('thread.thread_title', $keyword)
      ->countAllResults();

    $users = $forumModel->created_by;

    $datas = [
      'title' => 'Forum | ',
      'threads' => $threads,
      'page' => $page,
      'perPage' => $perPage,
      'total' => $total,
      'offset' => $offset,
      'users' => $users,
      'keyword' => $keyword
    ];

    return view('forum/index', $datas);
  }

  public function view()
  {
    $id = $this->request->uri->getSegment(3);

    $forumModel = new ForumModel();
    $thread = $forumModel->find($id);
    $threadTitle = $thread->thread_title;

    $categoryModel = new CategoryModel();
    $category = $categoryModel->find($thread->category_id);

    $usersModel = new UsersModel();
    $user = $usersModel->find($thread->created_by);

    $replyModel = new ReplyModel();
    $reply = $replyModel->select('reply.id, reply.reply_body, reply.created_at, users.name, users.username, users.avatar')
      ->join('users', 'users.id=reply.user_id', 'left')
      ->where('thread_id', $id)
      ->get();

    $viewRatingModel = new ViewRatingModel();
    $rating = $viewRatingModel->where('thread_id', $id)->first();
    $result = $rating->rating;

    $datas = [
      'title' => $threadTitle . ' | ',
      'usersModel' => $usersModel,
      'thread' => $thread,
      'category' => $category,
      'user' => $user,
      'reply' => $reply,
      'replyModel' => $replyModel,
      'rating' => $result
    ];
    return view('forum/view', $datas);
  }

  public function create()
  {
    $forumModel = new ForumModel();

    $categoryModel = new CategoryModel();
    $category = $categoryModel->findAll();
    $categoryArray = null;
    foreach ($category as $c) {
      $categoryArray[$c->category_id] = $c->category;
    }

    if ($this->request->getPost()) {
      $data = $this->request->getPost();
      $validate = $this->validation->run($data, 'thread');
      $errors = $this->validation->getErrors();

      if (!$errors) {

        $forumModel = new ForumModel();
        $forumModel->save([
          'thread_title' => $this->request->getVar('title'),
          'thread_body' => $this->request->getVar('content'),
          'category_id' => $this->request->getVar('category-id'),
          'created_by' => $this->session->get('id'),
          'created_at' => date('Y-m-d H:i:s'),
        ]);

        $id = $forumModel->insertID();

        $segments = ['forum', 'view', $id];

        $this->session->setFlashData('success', 'Thread berhasil dibuat!');

        return redirect()->to(base_url($segments));
      } else {
        $this->session->setFlashData('errors', $errors);
      }
    }

    $datas = [
      'title' => 'Buat Thread Baru | ',
      'forumModel' => $forumModel,
      'categoryArray' => $categoryArray
    ];

    return view('forum/create', $datas);
  }

  public function update()
  {
    $id = $this->request->uri->getSegment(3);
    $forumModel = new ForumModel();
    $thread = $forumModel->find($id);

    if ($this->request->getPost()) {
      $data = $this->request->getPost();
      $validate = $this->validation->run($data, 'thread');
      $errors = $this->validation->getErrors();

      if (!$errors) {

        $forumModel = new ForumModel();
        $forumModel->save([
          'id' => $id,
          'thread_title' => $this->request->getVar('title'),
          'thread_body' => $this->request->getVar('content'),
          'category_id' => $this->request->getVar('category-id'),
          'created_by' => $this->session->get('id'),
          'created_at' => $forumModel->created_at,
          'updated_by' => $this->session->get('id'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $segments = ['forum', 'view', $id];

        $this->session->setFlashData('success', 'Thread berhasil disunting!');

        return redirect()->to(base_url($segments));
      } else {
        $this->session->setFlashData('errors', $errors);

        return redirect()->to(base_url('forum/update/' . $id))->withInput();
      }
    }

    $categoryModel = new CategoryModel();
    $category = $categoryModel->findAll();
    $categoryArray = null;
    foreach ($category as $c) {
      $categoryArray[$c->category_id] = $c->category;
    }


    $datas = [
      'title' => 'Sunting Thread | ',
      'thread' => $thread,
      'categoryArray' => $categoryArray
    ];

    return view('forum/update', $datas);
  }

  public function uploadImg()
  {
    $validated = $this->validate([
      'upload' => [
        'uploaded[upload]',
        'mime_in[upload,image/jpg,image/jpeg,image/png]',
        'max_size[upload,2048]',
      ]
    ]);
    if ($validated) {
      $file = $this->request->getFile('upload');
      $fileName = $file->getRandomName();
      $writePath = './thread';
      $file->move($writePath, $fileName);
      $data = [
        'uploaded' => true,
        'url' => base_url('thread/' . $fileName),
      ];
    } else {
      $data = [
        'uploaded' => false,
        'error' => [
          'messages' => $this->request->getFile('upload')
        ],
      ];
    }

    return $this->response->setJSON($data);
  }

  public function delete()
  {
    $id = $this->request->uri->getSegment(3);
    $forumModel = new \App\Models\ForumModel();

    $forumModel->delete($id);
    $this->session->setFlashdata('success', 'Berhasil menghapus thread.');

    return redirect()->to(base_url('forum/index'));
  }

  public function rate()
  {
    if ($this->request->getPost()) {
      $ratingModel = new RatingModel();
      $data = $this->request->getPost();
      $rating = new \App\Entities\Rating();

      $check = $ratingModel->where('user_id', $data['user_id'])
        ->where('thread_id', $data['thread_id'])
        ->first();

      if ($check) {
        $rating->id = $check->id;
      }

      $rating->fill($data);

      $ratingModel->save($rating);

      $this->session->setFlashdata('success', 'Berhasil memberi rating.');

      $segment = ['forum', 'view', $data['thread_id']];

      return redirect()->to(base_url($segment));
    }
  }
}
