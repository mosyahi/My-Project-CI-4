<?= $this->extend('layouts/partials/dashboard/main') ?>
<?= $this->section('content') ?>

<div class="container container-position">
    <div class="card blur">
        <div class="card-header mt-2 mb-2">
            <h3>Formulir Biodata Pelamar</h3>
            <small class="text-danger">*Semua form wajib diisi.</small>
        </div>
        <div class="card-body">

            <form id="myForm" action="<?= base_url('user/biodata-pelamar/formulir') ?>" method="POST">
                <div class="accordion">
                  <div class="accordion-item blur">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed header-accordion" type="button" data-bs-toggle="collapse" data-bs-target="#data-diri" aria-expanded="true" aria-controls="data-diri">
                        Data Diri
                    </button>
                </h2>
                <div id="data-diri" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    <div class="row g-3">
                        <input type="hidden" name="user_id" value="<?= session('id_user') ?>">
                        <div class="col-12">
                            <label class="form-label">Posisi Yang Dilamar</label>
                            <input type="text" class="form-control form-style" name="posisi_lamar" placeholder="Posisi yang dilamar*" value="<?= old('posisi_lamar') ?>" required>
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label">Nama</label>
                          <input type="text" class="form-control form-style" name="nama" placeholder="Nama Lengkap Sesuai KTP*" value="<?= old('nama') ?>" required>
                      </div>

                      <div class="col-sm-6">
                          <label class="form-label">Nomor KTP</label>
                          <input type="number" class="form-control form-style" name="ktp" placeholder="Nomor KTP Anda*" value="<?= old('ktp') ?>" required>
                      </div>

                      <div class="col-4">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control form-style" name="tempat_lahir" placeholder="Tempat Kelahiran*" value="<?= old('tempat_lahir') ?>" required>
                    </div>

                    <div class="col-4">
                      <label class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control form-style" name="tgl_lahir" placeholder="Tanggal Lahir Anda*" value="<?= old('tgl_lahir') ?>" required>
                  </div>

                  <div class="col-4">
                      <label class="form-label">Jenis Kelamin</label>
                      <select class="form-select form-style" name="jk" required>
                        <option selected disabled>-- Pilih Jenis Kelamin --</option>
                        <option value="L">Laki - Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="col-4">
                    <label class="form-label">Agama</label>
                    <input type="text" class="form-control form-style" name="agama" placeholder="Agama*" value="<?= old('agamar') ?>" required>
                </div>

                <div class="col-4">
                  <label class="form-label">Golongan Darah</label>
                  <input type="text" class="form-control form-style" name="gol_darah" placeholder="Golongan Darah Anda cth: AB*" value="<?= old('gol_darah') ?>" required>
              </div>

              <div class="col-4">
                  <label class="form-label">Status</label>
                  <select class="form-select form-style" name="status" required>
                    <option selected disabled>-- Pilih Status --</option>
                    <option>Belum Menikah</option>
                    <option>Sudah Menikah</option>
                    <option>Cerai</option>
                </select>
            </div>

            <div class="col-6">
                <label class="form-label">Alamat KTP</label>
                <textarea class="form-control form-style" name="alamat_ktp" rows="2" placeholder="Isi alamat sesuai KTP*" required><?= old('alamat_ktp') ?></textarea>
            </div>  

            <div class="col-6">
                <label class="form-label">Alamat Tinggal</label>
                <textarea class="form-control form-style" name="alamat_tinggal" rows="2" placeholder="Isi alamat tinggal saat ini*" required><?= old('alamat_tinggal') ?></textarea>
            </div>            

            <div class="col-4">
                <label class="form-label">Email</label>
                <input type="email" class="form-control form-style" name="email" placeholder="Email Aktif*" value="<?= session('email') ?>" required>
            </div>

            <div class="col-4">
                <label class="form-label">No. Telp</label>
                <input type="text" class="form-control form-style" name="telepon" placeholder="Nomor Handphone Anda*" value="<?= old('telepon') ?>" required>
            </div>

            <div class="col-4">
              <label class="form-label">No. Telp Orang Terdekat</label>
              <input type="text" class="form-control form-style" name="telepon_two" placeholder="Nomor Handphone Orang Terdekat*" value="<?= old('telepon_two') ?>" required>
          </div>

          <div class="col-12">
            <label class="form-label">Skill</label>
            <textarea class="form-control form-style" name="skill" rows="2" placeholder="Tulisakan Keahlian & Keterampilan Yang anda miliki saat ini*" required><?= old('skill') ?></textarea>
        </div>

        <div class="col-6">
            <label class="form-label">Penempatan</label>
            <select class="form-select form-style" name="question" required>
                <option selected disabled>-- Pilih --</option>
                <option>Ya</option>
                <option>Tidak</option>
            </select>
        </div>

        <div class="col-6">
            <label class="form-label">Penghasilan Yang Diharapkan</label>
            <input type="text" class="form-control form-style" name="salary" placeholder="Penghasilan yang diharapkan*" value="<?= old('salary') ?>" required>
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
        <div class="col-12 text-center text-primary mt-3">
            <a type="button" class="add-form btn btn-style" data-container="pendidikan-container"><i class="fas fa-plus"></i> Tambah Pendidikan</a>
        </div>
        <div class="row g-3 pendidikan-container mt-3">
            <hr class="my-4">
            <div class="col-6">
                <label class="form-label">Jenjang Pendidikan</label>
                <input type="text" class="form-control form-style" name="pendidikan[]" placeholder="Jenjang Pendidikan*" value="<?= old('pendidikan') ?>" required>
            </div>
            <div class="col-6">
                <label class="form-label">Nama Institusi Akademik</label>
                <input type="text" class="form-control form-style" name="institusi[]" placeholder="Nama Institusi Akademik*" value="<?= old('institusi') ?>" required>
            </div>
            <div class="col-4">
                <label class="form-label">Jurusan</label>
                <input type="text" class="form-control form-style" name="jurusan[]" placeholder="Jurusan*" value="<?= old('jurusan') ?>" required>
            </div>
            <div class="col-4">
                <label class="form-label">Tahun Lulus</label>
                <input type="number" class="form-control form-style" name="tahun_pendidikan[]" placeholder="Tahun*" value="<?= old('tahun_pendidikan') ?>" required>
            </div>
            <div class="col-4">
                <label class="form-label">IPK</label>
                <input type="text" class="form-control form-style" name="ipk[]" placeholder="IPK cth: 3.56*" value="<?= old('ipk') ?>" required>
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
        <div class="col-12 text-center text-primary mt-3">
            <a type="button" class="add-form btn btn-style" data-container="pelatihan-container"><i class="fas fa-plus"></i> Tambah Pelatihan</a>
        </div>
        <div class="row g-3 pelatihan-container mt-3">
            <hr class="my-4">
            <div class="col-4">
                <label class="form-label">Kursus Pelatihan</label>
                <input type="text" class="form-control form-style" name="pelatihan[]" placeholder="Nama Kursus/Seminar*" value="<?= old('pelatihan') ?>" required>
            </div>
            <div class="col-4">
                <label class="form-label">Sertifikat</label>
                <select class="form-select form-style" name="sertifikat[]" required>
                    <option selected disabled>-- Pilih --</option>
                    <option>Ya</option>
                    <option>Tidak</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label">Tahun</label>
                <input type="number" class="form-control form-style" name="tahun_pelatihan[]" placeholder="Tahun*" value="<?= old('tahun_pelatihan') ?>" required>
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
        <div class="col-12 text-center text-primary mt-3">
            <a type="button" class="add-form btn btn-style" data-container="pekerjaan-container"><i class="fas fa-plus"></i> Tambah Pekerjaan</a>
        </div>
        <div class="row g-3 pekerjaan-container mt-3">
            <hr class="my-4">
            <div class="col-3">
                <label class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control form-style" name="pekerjaan[]" placeholder="Nama Perusahaan*" value="<?= old('pekerjaan') ?>" required>
            </div>
            <div class="col-3">
                <label class="form-label">Posisi Terakhir</label>
                <input type="text" class="form-control form-style" name="posisi[]" placeholder="Posisi Terakhir*" value="<?= old('posisi') ?>" required>
            </div>
            <div class="col-3">
                <label class="form-label">Pendapatan Terakhir</label>
                <input type="text" class="form-control form-style" name="pendapatan[]" placeholder="Pendapatan Terakhir*" value="<?= old('pendapatan') ?>" required>
            </div>
            <div class="col-3">
                <label class="form-label">Tahun</label>
                <input type="text" class="form-control form-style" name="tahun_pekerjaan[]" placeholder="Tahun*" value="<?= old('tahun_pekerjaan') ?>" required>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<hr class="my-4">

<button class="btn btn-style" type="submit" onclick="konfirmasiSimpan()">Simpan</button>
<a class="btn btn-style-2" type="button" href="<?= base_url('user/biodata-pelamar') ?>">Kembali</a>
<button class="btn btn-style-3" type="reset">Reset</button>
</form>

</div>
</div>
</div>

<script>
  function konfirmasiSimpan() {
    var confirmation = confirm('Apakah Anda yakin ingin menyimpan data? formulir yang sudah disimpan tidak bisa di edit kembali.');

    if (confirmation) {
      document.getElementById('myForm').submit();
  }
}
</script>


<?= $this->endSection() ?>
