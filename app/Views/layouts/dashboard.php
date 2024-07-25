<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - POSIN</title>
        <link href="<?= base_url("css/simple-datatables/style.min.css") ?>" rel="stylesheet" />
        <link href="<?= base_url("css/styles.css") ?>" rel="stylesheet" />
        <script src="<?= base_url("js/fontawesome/all.js") ?>" crossorigin="anonymous"></script>
    </head>

    <body class="sb-nav-fixed">


    <?= $this->include('partials/navigation'); ?>
   
    <div id="layoutSidenav">
        
        <?= $this->include('partials/sidebar'); ?>

        <div id="layoutSidenav_content">

            <?= $this->renderSection('content') ?>

            <?= $this->include('partials/footer') ?>
        </div>
    </div>




        <script src="<?= base_url("js/bootstrap.bundle.min.js") ?>" crossorigin="anonymous"></script>
        <script src="<?= base_url("js/scripts.js") ?>"></script>
        <script src="<?= base_url("js/Chart.min.js") ?>" crossorigin="anonymous"></script>
        <script src="<?= base_url("assets/demo/chart-area-demo.js") ?>"></script>
        <script src="<?= base_url("assets/demo/chart-bar-demo.js") ?>"></script>
        <script src="<?= base_url("js/simple-datatables.min.js") ?>" crossorigin="anonymous"></script>
        <script src="<?= base_url("js/datatables-simple-demo.js") ?>"></script>
    </body>
</html>