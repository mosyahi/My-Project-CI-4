<?= $this->extend('layouts/partials/dashboard/main') ?>
<?= $this->section('content') ?>

<div class="container container-position">
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
                        <?php foreach($biodata as $item) : ?>
                            <td><?= $i++; ?></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['ttl'] ?></td>
                            <td><?= $item['posisi_lamar'] ?></td>
                            <td>
                                <a type="button" class="btn btn-rounded btn-secondary"><i class="fas fa-eye"></i></a>
                                <a type="button" class="btn btn-rounded btn-primary"><i class="fas fa-edit"></i></a>
                                <a type="button" class="btn btn-rounded btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
