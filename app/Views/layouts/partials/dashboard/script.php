<script src="<?= base_url() ?>bootstrap/jquery.min.js"></script>
<script src="<?= base_url() ?>datatables/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tabledata').DataTable();
    });
</script>
<script>
    document.querySelectorAll('.navbar-nav a').forEach(item => {
        item.addEventListener('click', () => {
            document.querySelector('.navbar-collapse').classList.remove('show');
        });
    });
</script>
<script src="<?= base_url() ?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>bootstrap/popper.min.js"></script>
<script src="<?= base_url() ?>bootstrap/all.min.js"></script>
<script src="<?= base_url() ?>js/syarif/app.js"></script>
