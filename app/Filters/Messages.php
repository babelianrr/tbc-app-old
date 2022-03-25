<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Messages implements FilterInterface
{
  public function before(RequestInterface $request, $arguments = null)
  {
    $messagesModel = new \App\Models\MessagesModel();
    $message = $messagesModel->find($request->uri->getSegment(3));

    if (!$message) {
      return redirect()->to(base_url('messages/inbox'));
    }

    if (session()->id != $message->recipient_id && session()->id != $message->sender_id) {
      return redirect()->to(base_url('messages/inbox'));
    }
  }

  public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
  {
    // do something...
  }
}
