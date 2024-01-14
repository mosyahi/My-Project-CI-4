<?= $this->extend('layouts/partials/dashboard/main') ?>
<?= $this->section('content') ?>

<div class="container container-position">
    <div class="card blur">
        <div class="card-header mt-2 mb-2">
            <h3>Formulir Biodata Pelamar</h3>
            <small class="text-danger">*Semua form wajib diisi.</small>
        </div>
        <div class="card-body">

            <form action="<?= base_url('admin/biodata/add') ?>">
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
                        <div class="col-12">
                            <label class="form-label">Posisi Yang Dilamar</label>
                            <input type="text" class="form-control form-style" name="posisi_lamar" placeholder="Posisi yang dilamar*" required>
                        </div>
                        <div class="col-sm-6">
                          <label class="form-label">Nama</label>
                          <input type="text" class="form-control form-style" name="nama" placeholder="Nama Lengkap Sesuai KTP*" required>
                      </div>

                      <div class="col-sm-6">
                          <label class="form-label">Nomor KTP</label>
                          <input type="number" class="form-control form-style" name="ktp" placeholder="Nomor KTP Anda*" required>
                      </div>

                      <div class="col-4">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control form-style" name="tempat_lahir" placeholder="Tempat Kelahiran*" required>
                    </div>

                    <div class="col-4">
                      <label class="form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control form-style" name="tgl_lahir" placeholder="Tanggal Lahir Anda*" required>
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
                    <input type="text" class="form-control form-style" name="agama" placeholder="Agama*" required>
                </div>

                <div class="col-4">
                  <label class="form-label">Golongan Darah</label>
                  <input type="text" class="form-control form-style" name="gol_darah" placeholder="Golongan Darah Anda cth: AB*" required>
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
                <textarea class="form-control" name="alamat_ktp" rows="2" placeholder="Isi alamat sesuai KTP*" required></textarea>
            </div>  

            <div class="col-6">
                <label class="form-label">Alamat Tinggal</label>
                <textarea class="form-control" name="alamat_tinggal" rows="2" placeholder="Isi alamat tinggal saat ini*" required></textarea>
            </div>            

            <div class="col-4">
                <label class="form-label">Email</label>
                <input type="email" class="form-control form-style" name="email" placeholder="Email Aktif*" required>
            </div>

            <div class="col-4">
                <label class="form-label">No. Telp</label>
                <input type="text" class="form-control form-style" name="telepon" placeholder="Nomor Handphone Anda*" required>
            </div>

            <div class="col-4">
              <label class="form-label">No. Telp Orang Terdekat</label>
              <input type="text" class="form-control form-style" name="telepon_two" placeholder="Nomor Handphone Orang Terdekat*" required>
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
      </div>
  </div>
</div>
</div>

<hr class="my-4">

<button class="btn btn-style" type="submit">Simpan</button>
<button class="btn btn-style-2" type="submit">Kembali</button>
<button class="btn btn-style-3" type="reset">Reset</button>
</form>

</div>
</div>
</div>

<?= $this->endSection() ?>
