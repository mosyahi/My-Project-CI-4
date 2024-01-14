<?= $this->extend('layouts/partials/auth/main') ?>
<?= $this->section('auth-content') ?>

<div class="container">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="mx-auto card-style" style="width: 27rem;">

            <div class="card-body m-3">
                <div class="mb-4 text-center">
                    <h5 class="card-title">Sign In</h5>
                    <p class="mt-2" style="font-size: 14px;">Silahkan melakukan proses login terlebih dahulu</p>
                </div>
                <form action="<?= base_url('login') ?>" method="POST">
                    <?= $this->include('components/alerts') ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control form-style" id="email" placeholder="Masukkan Email Anda">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" class="form-control form-style" id="password" placeholder="Masukkan Password Anda">
                            <span class="input-group-text toggle-password" id="togglePassword">
                                <i class="fas fa-eye-slash" id="eyeSlashIcon"></i>
                                <i class="fas fa-eye" id="eyeIcon" style="display: none;"></i>
                            </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-style">Sign In</button>
                </form>
                <div class="mt-3">
                    <p class="card-text">Belum punya akun? <a href="<?= base_url('register') ?>" class="text-foot">Sign Up</a></p>
                </div>
                <div class="text-center" style="margin-top: 40px;">
                    <small>
                        Copyright &copy; <?= date('Y') ?> 
                        <a href="https://mosyahizuku.site" target="_blank" class="text-foot">
                            Mochsyarifhidayat
                        </a>
                    </small>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>