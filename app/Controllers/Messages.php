<?php

namespace App\Controllers;

use \App\Models\MessagesModel;
use \App\Models\UsersModel;

class Messages extends BaseController
{
  public function __construct()
  {
    helper('form');
    $this->session = session();
  }

  public function create()
  {
    $recipient_id = $this->request->uri->getSegment(3);

    $messagesModel = new MessagesModel();
    $userModel = new UsersModel();

    $recipient = $userModel->find($recipient_id);

    $datas = [
      'title' => 'Kirim Direct Message | ',
      'messagesModel' => $messagesModel,
      'recipient' => $recipient
    ];
    return view('messages/create', $datas);
  }

  public function send()
  {
    $recipient_id = $this->request->uri->getSegment(3);

    $messagesModel = new MessagesModel();
    $userModel = new UsersModel();

    $recipient = $userModel->find($recipient_id);

    if ($this->request->getPost()) {
      $data = $this->request->getPost();
      $messages = new \App\Entities\Messages();
      $messages->fill($data);

      $messagesModel->save($messages);

      $segments = ['messages', 'outbox'];

      $this->session->setFlashData('Success', 'Berhasil mengirim pesan!');

      return redirect()->to(base_url($segments));
    }
  }

  public function inbox()
  {
    $messagesModel = new MessagesModel();
    $messages = $messagesModel
      ->select('users.name AS name, messages.message AS messages, messages.id AS messages_id')
      ->join('users', 'users.id=messages.sender_id', 'left')
      ->where('recipient_id', $this->session->get('id'))
      ->findAll();

    $datas = [
      'title' => 'Kotak Masuk DM | ',
      'messages' => $messages
    ];

    return view('messages/inbox', $datas);
  }

  public function outbox()
  {
    $messagesModel = new MessagesModel();
    $messages = $messagesModel
      ->select('users.name AS name, messages.message AS messages, messages.id AS messages_id')
      ->join('users', 'users.id=messages.recipient_id', 'left')
      ->where('sender_id', $this->session->get('id'))
      ->findAll();

    $datas = [
      'title' => 'Kotak Keluar DM | ',
      'messages' => $messages
    ];

    return view('messages/outbox', $datas);
  }

  public function view()
  {
    $id = $this->request->uri->getSegment(3);

    $messagesModel = new MessagesModel();

    $messages = $messagesModel->find($id);
    if ($messages->recipient_id == session()->get('id')) {
      $messages->is_read = 1;
      $messagesModel->save($messages);
    }

    $usersModel = new UsersModel();
    $recipient = $usersModel->find($messages->recipient_id);
    $sender = $usersModel->find($messages->sender_id);

    $datas = [
      'title' => 'Baca Pesan | ',
      'messages' => $messages,
      'recipient' => $recipient,
      'sender' => $sender,
    ];

    return view('messages/view', $datas);
  }
}
