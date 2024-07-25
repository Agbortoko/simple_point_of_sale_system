<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section("content") ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $pageTitle ?></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= route_to('admin.dashboard') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active"><?= $pageTitle ?></li>
        </ol>

        <div class="alert alert-danger">
            <p class="mb-0 text-center">Something not successful</p>
        </div>
    
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                <?= $pageTitle ?>
            </div>
            <div class="card-body table-responsive">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>

                    <?php if(isset($items) && count($items) > 0): ?>

                        <?php foreach($items as $item): ?>

                            <tr>
                                <td scope="col"><?= $item->name ?></td>
                                <td>
                                    <?php if(isset($categories) && count($categories) > 0): ?>
                                        <?php foreach($categories as $category): ?>
                                            <?php if($category->id == $item->category_id): ?>
                                                    <?= $category->name ?>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </td>
                                <td scope="col">
                                    <?= strlen($item->description) > 50 ? substr($item->description, 0 , 50) . "..." : $item->description; ?>
                                </td>
                                <td scope="col"><?= $item->quantity ?></td>
                                <td scope="col"><?= $item->price ?></td>
                                <td scope="col">
                                   <div class="d-flex flex-column flex-md-row gap-1">
                                        <a href="#" class="btn btn-sm btn-success"><i class="fa-regular fa-square-plus"></i> Stock Entry</a>
                                        <a href="#" class="btn btn-sm btn-primary"><i class="fa-regular fa-pen-to-square"></i> Update</a>
                                        <a href="#" class="btn btn-sm btn-danger"><i class="fa-regular fa-trash-can"></i> Delete</a>
                                   </div>
                                </td>
                            </tr>

                        <?php endforeach ?>


                    <?php endif ?>

                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


<?= $this->endSection() ?>