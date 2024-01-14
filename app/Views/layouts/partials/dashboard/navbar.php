<div class="container">
    <div class="row align-items-center">
        <div class="col-6">
            <a class="navbar-brand" href="#">
                <img src="https://mosyahizuku.site/assets/img/head.png" class="logo-brand" alt="Logo Syarif"> Apps Testing
            </a>
        </div>
        <div class="col-6 text-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= ($active == 'dashboard') ? 'active' : '' ?>" aria-current="page" href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($active == 'users') ? 'active' : '' ?>" href="<?= base_url('admin/data-users') ?>">Data Users</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= ($active == 'biodata') ? 'active' : '' ?>" href="<?= base_url('admin/biodata-pelamar') ?>">Biodata Pelamar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout') ?>">Logout</a>
            </li>
        </ul>
    </div>
</div>