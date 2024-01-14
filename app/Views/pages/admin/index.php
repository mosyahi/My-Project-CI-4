<?= $this->extend('layouts/partials/dashboard/main') ?>
<?= $this->section('content') ?>

<div class="container container-position">
    <div class="card blur">
        <div class="card-body mt-5 mb-5 text-center">
            <h2>Selamat datang <?= session('email') ?></h2>
            <small>Anda login sebagai <?= session('role') ?></small>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
