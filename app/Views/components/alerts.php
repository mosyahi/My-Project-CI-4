<?php if (session()->getFlashdata('error')) : ?>
<div class="alert alert-error alert-fade" role="alert">
    <?= session()->getFlashdata('error') ?>
</div>
<script>
    setTimeout(function() {
        var errorAlert = document.querySelector('.alert');
        errorAlert.classList.add('fade-out');
        setTimeout(function() {
            errorAlert.style.display = 'none';
        }, 500); 
    }, 3500); 
</script>
<?php endif; ?>

<?php if (session()->getFlashdata('success')) : ?>
<div class="alert alert-true alert-fade" role="alert">
    <?= session()->getFlashdata('success') ?>
</div>
<script>
    setTimeout(function() {
        var successAlert = document.querySelector('.alert');
        successAlert.classList.add('fade-out');
        setTimeout(function() {
            successAlert.style.display = 'none';
        }, 500); 
    }, 3500); 
</script>
<?php endif; ?>

<?php if (session()->getFlashdata('errors')) : ?>
<div class="alert alert-error alert-fade" role="alert">
    <?php foreach (session('errors') as $error): ?>
        <?= esc($error) ?>
    <?php endforeach ?>
</div>
<script>
    setTimeout(function() {
        var errorAlert = document.querySelector('.alert');
        errorAlert.classList.add('fade-out');
        setTimeout(function() {
            errorAlert.style.display = 'none';
        }, 500); 
    }, 5000); 
</script>
<?php endif; ?>
