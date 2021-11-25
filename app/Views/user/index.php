<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pickup Note</h1>
    <p class="mb-4">Informasi Pickup Note TIKI Serang </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <!-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pickup Note</h6>
        </div> -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pickup Note</th>
                            <th>Product</th>
                            <th>Station</th>
                            <th>Account</th>
                            <th>Corporate</th>
                            <th>Sprinter</th>
                            <th>Time</th>
                            <th>Total Pickup</th>
                            <th>Pickup Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Pickup Note</th>
                            <th>Product</th>
                            <th>Station</th>
                            <th>Account</th>
                            <th>Corporate</th>
                            <th>Sprinter</th>
                            <th>Time</th>
                            <th>Total Pickup</th>
                            <th>Pickup Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <!-- pengambilan data langsung dari controler -->
                        <?php foreach ($de_pickup_note as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value->pickup_no ?></td>
                                <td><?= $value->product ?></td>
                                <td><?= $value->sta_code ?></td>
                                <td><?= $value->account_no ?></td>
                                <td><?= $value->company_name ?></td>
                                <td><?= $value->empl_full_name ?></td>
                                <td><?= $value->pickup_time ?></td>
                                <td><?= $value->total_pickup ?></td>
                                <td><?= $value->pickup_date ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->



<?= $this->endsection(); ?>