<?php
$session = session();
$errors = $session->getFlashdata('errors');
$success = $session->getFlashdata('success');
?>
<div class="container">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<img src="/img/tbc.png" alt="tbc-brand" width="30" class="d-inline-block align-text-top me-2">
			<a class="navbar-brand" href="/">The Babelian Channel</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
				<div class="navbar-nav">
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
					<a class="nav-link" href="/user">User</a>
					<a class="nav-link" href="/forum">Forum</a>
					<a class="nav-link" href="/home/about">About</a>
					<a class="nav-link" href="/home/contact">Contact</a>
					<?php if (!session()->has('isLoggedIn')) : ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Akun
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="<?= base_url('auth/login') ?>">Log In</a></li>
								<li><a class="dropdown-item" href="<?= base_url('user/register') ?>">Daftar</a></li>
							</ul>
						<?php else : ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Akun Saya (<?= $session->username ?>)
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Log Out</a></li>
							</ul>
						<?php endif; ?>
						</li>
				</div>
			</div>
		</div>
	</nav>
</div>