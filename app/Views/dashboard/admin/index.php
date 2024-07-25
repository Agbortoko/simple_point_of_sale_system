<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section("content") ?>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body d-flex justify-content-between align-items-center text-uppercase">
                        <span>Items</span>
                        <span class="fs-2 text-bold"><?= isset($totalItems) ? $totalItems : 0 ?></span>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Items</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body d-flex justify-content-between align-items-center text-uppercase">
                        <span>Sales</span>
                        <span class="fs-2 text-bold"><?= isset($totalSales) ? $totalSales : 0 ?></span>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Sales</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body d-flex justify-content-between align-items-center text-uppercase">
                        <span>Categories</span>
                        <span class="fs-2 text-bold"><?= isset($totalCategories) ? $totalCategories : 0 ?></span>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Categories</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body d-flex justify-content-between align-items-center text-uppercase">
                        <span>Users</span>
                        <span class="fs-2 text-bold"><?= isset($totalAccounts) ? $totalAccounts : 0 ?></span>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">View Users</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>


<?= $this->endSection() ?>