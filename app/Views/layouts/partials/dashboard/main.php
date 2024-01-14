<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->include('layouts/partials/dashboard/head') ?>
</head>
<body class="dashboard">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">

        <?php if (session()->get('role') === 'Admin') : ?>

        <?= $this->include('layouts/partials/dashboard/navbar') ?>

        <?php elseif (session()->get('role') === 'User') : ?>

        <?= $this->include('layouts/partials/dashboard/navbar-user') ?>

        <?php endif; ?>
        
    </nav>

    <!-- Content -->
    <main class="p-4">

        <?= $this->renderSection('content') ?>
        
    </main>

    <?= $this->include('layouts/partials/dashboard/footer') ?>

    <!-- Bootstrap JS and Popper.js (required for Bootstrap) -->
    <?= $this->include('layouts/partials/dashboard/script') ?>

</body>
</html>
