<?= $this->extend('layouts/partials/dashboard/main') ?>
<?= $this->section('content') ?>

<div class="container container-position">
    <div class="card blur">
        <div class="card-header mt-2 mb-2">
            <h3>Data Users</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tabledata" class="table table-bordered table-transparent">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Role</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($users as $item) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $item['role'] ?></td>
                            <td><?= $item['nama'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td class="text-center">
                                <?php
                                    $status = $item['status'];
                                    $badge_class = ($status == 'Active') ? 'badge text-bg-white' : 'badge text-bg-primary';
                                ?>
                                <span class="<?= $badge_class ?> badge-style" style=""><?= $status ?></span>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
