<?= $this->extend('layouts/partials/dashboard/main') ?>
<?= $this->section('content') ?>

<div class="container container-position">
    <?= $this->include('components/alerts') ?>
    <div class="card blur">
        <div class="card-header mt-2 mb-2">
            <a class="btn btn-style" type="button" href="<?= base_url('admin/biodata-pelamar/new') ?>" style="float: right;">
                <i class="fas fa-plus"></i> 
                Add <?= $title; ?>
            </a>
            <h3>Biodata Pelamar</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabledata" class="table table-bordered table-transparent">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Posisi Dilamar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($biodata as $item) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $item['nama'] ?></td>
                                <td><?= $item['ttl'] ?></td>
                                <td><?= $item['posisi_lamar'] ?></td>
                                <td>
                                    <a type="button" href="<?= base_url('admin/biodata-pelamar/view/' . $item['id_biodata'] . '/' . str_replace(' ', '-', urldecode($item['nama'])) . '/' . str_replace(' ', '-', urldecode($item['posisi_lamar']))) ?>" class="btn btn-rounded btn-secondary rounded-circle btn-sm btn-style"><i class="fas fa-eye"></i></a>
                                    <a type="button" href="<?= base_url('admin/biodata-pelamar/edit/' . $item['id_biodata'] . '/' . str_replace(' ', '-', urldecode($item['nama'])) . '/' . str_replace(' ', '-', urldecode($item['posisi_lamar']))) ?>" class="btn btn-rounded btn-secondary rounded-circle btn-sm btn-style-2"><i class="fas fa-edit"></i></a>
                                    <a type="button" data-bs-toggle="modal" data-bs-target="#delete-<?= $item['id_biodata'] ?>" class="btn btn-rounded btn-danger rounded-circle btn-sm btn-style-3"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php foreach ($biodata as $item): ?>
    <div class="modal fade" id="delete-<?= $item['id_biodata'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Konfirmasi Penghapusan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Yakin ingin menghapus data ini? data pelatihan, pekerjaan dan pendidikan <?= $item['nama'] ?> akan ikut terhapus.</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a type="button" href="<?= base_url('admin/biodata-pelamar/delete/'. $item['id_biodata']) ?>" class="btn btn-primary">Hapus</a>
        </div>
    </div>
</div>
</div>
<?php endforeach ?>

<?= $this->endSection() ?>
