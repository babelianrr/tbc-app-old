<?php

namespace App\Controllers;

use \App\Models\ForumModel;
use \App\Models\ReplyModel;

class Reply extends BaseController
{
  public function __construct()
  {
    helper(['form']);
    $this->validation = \Config\Services::validation();
    $this->session = session();
  }

  public function create()
  {
    $thread_id = $this->request->uri->getSegment(3);

    $replyModel = new ReplyModel();
    $data = [
      'thread_id' => $thread_id,
      'reply_body' => $this->request->getVar('content'),
      'user_id' => $this->session->get('id'),
      'created_at' => date('Y-m-d H:i:s'),
      'created_by' => $this->session->get('id'),
    ];


    $validate = $this->validation->run($data, 'reply');
    if (!$validate) {
      $errors = $this->validation->getErrors();

      $this->session->getFlashdata('errors', $errors);
      return redirect()->to(base_url('forum/view/' . $thread_id))->withInput();
    } else {
      $replyModel->save($data);
      $id = $replyModel->insertID();

      $segments = ['forum', 'view', $thread_id];

      $this->session->setFlashData('Success', 'Komentar berhasil dibuat!');

      return redirect()->to(base_url($segments));
    }
  }

  public function edit()
  {
    $id = $this->request->uri->getSegment(3);

    $replyModel = new ReplyModel();
    $reply = $replyModel->find($id);

    $forumModel = new ForumModel();
    $thread = $forumModel->find($reply->thread_id);

    $datas = [
      'title' => 'Sunting Komentar | ',
      'reply' => $reply,
      'thread' => $thread
    ];

    return view('reply/edit', $datas);
  }

  public function update()
  {
    $id = $this->request->uri->getSegment(3);

    $replyModel = new ReplyModel();
    $reply = $replyModel->find($id);

    $forumModel = new ForumModel();
    $thread = $forumModel->find($reply->thread_id);

    $data = [
      'id' => $this->request->getPost('id'),
      'thread_id' => $this->request->getPost('thread_id'),
      'user_id' => $this->request->getPost('user_id'),
      'created_by' => $this->request->getPost('created_by'),
      'created_at' => $this->request->getPost('created_at'),
      'reply_body' => $this->request->getVar('reply_body'),
      'updated_by' => session()->get('id'),
      'updated_at' => date('Y-m-d H:i:s')
    ];

    $validate = $this->validation->run($data, 'reply');

    if (!$validate) {
      $errors = $this->validation->getErrors();

      $this->session->setFlashData('errors', $errors);

      return redirect()->to(base_url('reply/edit/' . $reply->id))->withInput();
    } else {
      $replyModel->save($data);

      $segments = ['forum', 'view', $thread->id];

      $this->session->setFlashData('Success', 'Komentar berhasil disunting!');

      return redirect()->to(base_url($segments));
    }
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
      $writePath = './reply';
      $file->move($writePath, $fileName);
      $data = [
        'uploaded' => true,
        'url' => base_url('reply/' . $fileName),
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
    $thread_id = $this->request->uri->getSegment(4);

    $replyModel = new ReplyModel();

    $replyModel->delete($id);

    $segments = ['forum', 'view', $thread_id];

    $this->session->setFlashData('Success', 'Komentar berhasil dihapus!');

    return redirect()->to(base_url($segments));
  }
}
