<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');

$messagesModel = new \App\Models\MessagesModel();
$inbox = $messagesModel->where('recipient_id', $session->id)->where('is_read', 0)->countAllResults();
?>
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <img src="/img/tbc.jpg" alt="tbc-brand" width="40" class="d-inline-block align-text-top me-2">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <?php if (!session()->has('isLoggedIn')) : ?>
            <a class="nav-link" aria-current="page" href="/home">Home</a>
            <a class="nav-link" href="/home/about">About</a>
            <a class="nav-link" href="/home/contact">Contact</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Akun
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="<?= base_url('auth/login') ?>">Masuk</a></li>
                <li><a class="dropdown-item" href="<?= base_url('user/register') ?>">Daftar</a></li>
              </ul>
            <?php else : ?>
              <a class="nav-link" aria-current="page" href="/home">Home</a>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Direktori
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/character">Karakter</a></li>
                <li><a class="dropdown-item" href="/pendant">Pendant</a></li>
              </ul>
            </li>
            <a class="nav-link" href="/forum">Forum</a>
            <a class="nav-link" href="/home/about">About</a>
            <a class="nav-link" href="/home/contact">Contact</a>
            <?php if ($session->role == 0) : ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin Tools
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="<?= base_url('user/index') ?>">User</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('dashboard/index') ?>">Dashboard</a></li>
                  <li><a class="dropdown-item" href="<?= base_url('dashboard/giveaway') ?>">Giveaway</a></li>
                </ul>
              </li>
            <?php endif; ?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Akun Saya <small>(<?= $session->username ?>)</small>
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="<?= base_url('messages/inbox') ?>">DM <small>(<?= $inbox ?> belum dibaca)</small></a></li>
                <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Log Out</a></li>
              </ul>
            </li>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </nav>
</div>