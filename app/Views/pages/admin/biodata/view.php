<?= $this->extend('layouts/partials/dashboard/main') ?>
<?= $this->section('content') ?>

<div class="container container-position">
    <div class="card blur">
        <div class="card-header mt-2 mb-2">
            <h3>Formulir Biodata Pelamar</h3>
        </div>
        <div class="card-body">

            <div class="accordion">
              <div class="accordion-item blur">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed header-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#data-diri" aria-expanded="true" aria-controls="data-diri">
                    Data Diri
                </button>
            </h2>
            <div id="data-diri" class="accordion-collapse collapse">
              <div class="accordion-body">

                <div class="container">
                    <div class="card blur">
                        <div class="card-header mt-2 mb-2">
                            <h5>Biodata Pelamar</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless table-transparent">
                                    <tr>
                                        <th>Posisi Yang Dilamar</th>
                                        <td>:</td>
                                        <td ><span class="badge badge-style"><?= $biodata['posisi_lamar'] ?></span></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>:</td>
                                        <td><?= $biodata['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Ktp</th>
                                        <td>:</td>
                                        <td><?= $biodata['ktp'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <td>:</td>
                                        <td><?= $biodata['ttl'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>:</td>
                                        <td><?= ($biodata['jk'] == 'L') ? 'Laki-Laki' : 'Perempuan'; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td>:</td>
                                        <td><?= $biodata['agama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Golongan Darah</th>
                                        <td>:</td>
                                        <td><?= $biodata['gol_darah'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>:</td>
                                        <td><?= $biodata['status'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat KTP</th>
                                        <td>:</td>
                                        <td><?= $biodata['alamat_ktp'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat Saat Ini</th>
                                        <td>:</td>
                                        <td><?= $biodata['alamat_tinggal'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>:</td>
                                        <td><?= $biodata['email'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Telepon</th>
                                        <td>:</td>
                                        <td><?= $biodata['telepon'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nomor Telepon Lain</th>
                                        <td>:</td>
                                        <td><?= $biodata['telepon_two'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Skill</th>
                                        <td>:</td>
                                        <td><?= $biodata['skill'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Siap ditempatkan dimana saja</th>
                                        <td>:</td>
                                        <td><?= $biodata['question'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Gaji yang diharapkan</th>
                                        <td>:</td>
                                        <td><?= $biodata['salary'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- #2 -->
<div class="accordion mt-3">
    <div class="accordion-item blur">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed header-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#pendidikan" aria-expanded="true" aria-controls="pendidikan">
            Riwayat Pendidikan
        </button>
    </h2>
    <div id="pendidikan" class="accordion-collapse collapse">
        <div class="accordion-body">

            <div class="container">
                <div class="card blur">
                    <div class="card-header mt-2 mb-2">
                        <h5>Riwayat Pendidikan</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-transparent text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Pendidikan</th>
                                    <th>Institusi</th>
                                    <th>Jurusan</th>
                                    <th>IPK</th>
                                    <th>Tahun</th>
                                </tr>
                                <?php foreach ($jsonPendidikan['pendidikan'] as $index => $pendidikan): ?>
                                    <tr>
                                        <td><?= $index + 1; ?></td>
                                        <td><?= $pendidikan; ?></td>
                                        <td><?= $jsonPendidikan['institusi'][$index]; ?></td>
                                        <td><?= $jsonPendidikan['jurusan'][$index]; ?></td>
                                        <td><?= $jsonPendidikan['ipk'][$index]; ?></td>
                                        <td><?= $jsonPendidikan['tahun'][$index]; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<div class="accordion mt-3">
    <div class="accordion-item blur">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed header-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#pelatihan" aria-expanded="true" aria-controls="pelatihan">
            Riwayat Pelatihan
        </button>
    </h2>
    <div id="pelatihan" class="accordion-collapse collapse">
        <div class="accordion-body">

            <div class="container">
                <div class="card blur">
                    <div class="card-header mt-2 mb-2">
                        <h5>Riwayat Pelatihan</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-transparent text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Pelatihan Kursus/Seminar</th>
                                    <th>Sertifikat</th>
                                    <th>Tahun</th>
                                </tr>
                                <?php foreach ($jsonPelatihan['pelatihan'] as $index => $pelatihan): ?>
                                    <tr>
                                        <td><?= $index + 1; ?></td>
                                        <td><?= $pelatihan; ?></td>
                                        <td><?= $jsonPelatihan['sertifikat'][$index]; ?></td>
                                        <td><?= $jsonPelatihan['tahun'][$index]; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<div class="accordion mt-3">
    <div class="accordion-item blur">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed header-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#pekerjaan" aria-expanded="true" aria-controls="pekerjaan">
            Riwayat Pekerjaan
        </button>
    </h2>
    <div id="pekerjaan" class="accordion-collapse collapse">
        <div class="accordion-body">

            <div class="container">
                <div class="card blur">
                    <div class="card-header mt-2 mb-2">
                        <h5>Riwayat Pekerjaan</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-transparent text-center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Perusahaan</th>
                                    <th>Posisi Pekerjaan</th>
                                    <th>Pendapatan</th>
                                    <th>Tahun</th>
                                </tr>
                                <?php foreach ($jsonPekerjaan['pekerjaan'] as $index => $pekerjaan): ?>
                                    <tr>
                                        <td><?= $index + 1; ?></td>
                                        <td><?= $pekerjaan; ?></td>
                                        <td><?= $jsonPekerjaan['posisi'][$index]; ?></td>
                                        <td><?= $jsonPekerjaan['pendapatan'][$index]; ?></td>
                                        <td><?= $jsonPekerjaan['tahun'][$index]; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<hr class="my-4">

<a class="btn btn-style-2" type="button" href="<?= base_url('admin/biodata-pelamar') ?>">Kembali</a>

</div>
</div>
</div>

<?= $this->endSection() ?>
