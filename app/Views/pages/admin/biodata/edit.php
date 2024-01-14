<?= $this->extend('layouts/partials/dashboard/main') ?>
<?= $this->section('content') ?>

<div class="container container-position">
    <div class="card blur">
        <div class="card-header mt-2 mb-2">
            <h3>Formulir Biodata Pelamar</h3>
        </div>
        <div class="card-body">
            <form action="<?= base_url('admin/biodata-pelamar/update/' . $biodata['id_biodata']) ?>" method="POST">
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
                                            <td >
                                                <input type="text" class="form-control form-style" name="posisi_lamar" value="<?= $biodata['posisi_lamar'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nama</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="nama" value="<?= $biodata['nama'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nomor Ktp</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="ktp" value="<?= $biodata['ktp'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="ttl" value="<?= $biodata['ttl'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Jenis Kelamin</th>
                                            <td>:</td>
                                            <td >
                                                <select class="form-select form-style" name="jk" required>
                                                    <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                                    <option value="L" <?= ($biodata['jk'] == 'L') ? 'selected' : '' ?>>Laki - Laki</option>
                                                    <option value="P" <?= ($biodata['jk'] == 'P') ? 'selected' : '' ?>>Perempuan</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Agama</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="agama" value="<?= $biodata['agama'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Golongan Darah</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="gol_darah" value="<?= $biodata['gol_darah'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>:</td>
                                            <td >
                                                <select class="form-select form-style" name="status" required>
                                                    <option selected disabled>-- Pilih Status --</option>
                                                    <option <?= ($biodata['status'] == 'Belum Menikah') ? 'selected' : '' ?>>Belum Menikah</option>
                                                    <option <?= ($biodata['status'] == 'Sudah Menikah') ? 'selected' : '' ?>>Sudah Menikah</option>
                                                    <option <?= ($biodata['status'] == 'Cerai') ? 'selected' : '' ?>>Cerai</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Alamat KTP</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="alamat_ktp" value="<?= $biodata['alamat_ktp'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Alamat Saat Ini</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="alamat_tinggal" value="<?= $biodata['alamat_tinggal'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="email" value="<?= $biodata['email'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nomor Telepon</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="telepon" value="<?= $biodata['telepon'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nomor Telepon Lain</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="telepon_two" value="<?= $biodata['telepon_two'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Skill</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="skill" value="<?= $biodata['skill'] ?>" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Siap ditempatkan dimana saja</th>
                                            <td>:</td>
                                            <td >
                                                <select class="form-select form-style" name="question" required>
                                                    <option selected disabled>-- Pilih --</option>
                                                    <option <?= ($biodata['question'] == 'Ya') ? 'selected' : '' ?>>Ya</option>
                                                    <option <?= ($biodata['question'] == 'Tidak') ? 'selected' : '' ?>>Tidak</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Gaji yang diharapkan</th>
                                            <td>:</td>
                                            <td >
                                                <input type="text" class="form-control form-style" name="salary" value="<?= $biodata['salary'] ?>" required>
                                            </td>
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
                                            <td >
                                                <input type="text" class="form-control form-style" name="pendidikan[]" value="<?= $pendidikan; ?>" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-style" name="institusi[]" value="<?= $jsonPendidikan['institusi'][$index]; ?>" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-style" name="jurusan[]" value="<?= $jsonPendidikan['jurusan'][$index]; ?>" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-style" name="ipk[]" value="<?= $jsonPendidikan['ipk'][$index]; ?>" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control form-style" name="tahun_pendidikan[]" value="<?= $jsonPendidikan['tahun'][$index]; ?>" required>
                                            </td>
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
                                        <td>
                                            <input type="text" class="form-control form-style" name="pelatihan[]" value="<?= $pelatihan; ?>" required>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-style" name="sertifikat[]" value="<?= $jsonPelatihan['sertifikat'][$index]; ?>" required>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-style" name="tahun_pelatihan[]" value="<?= $jsonPelatihan['tahun'][$index]; ?>" required>
                                        </td>
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
                                        <td>
                                            <input type="text" class="form-control form-style" name="pekerjaan[]" value="<?= $pekerjaan; ?>" required>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-style" name="posisi[]" value="<?= $jsonPekerjaan['posisi'][$index]; ?>" required>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-style" name="pendapatan[]" value="<?= $jsonPekerjaan['pendapatan'][$index]; ?>" required>
                                        </td>
                                        <td>
                                            <input type="text" class="form-control form-style" name="tahun_pekerjaan[]" value="<?= $jsonPekerjaan['tahun'][$index]; ?>" required>
                                        </td>
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

<button class="btn btn-style" type="submit">Update</button>
<a class="btn btn-style-2" type="button" href="<?= base_url('admin/biodata-pelamar') ?>">Kembali</a>
</form>
</div>
</div>
</div>

<?= $this->endSection() ?>
