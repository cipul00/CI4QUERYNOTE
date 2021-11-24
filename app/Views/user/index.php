<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pickup Note</h1>
    <p class="mb-4">DataTables is a third party plugin <a target="_blank" href="https://datatablesss.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Pickup Note</th>
                            <th>Station</th>
                            <th>Account</th>
                            <th>Product</th>
                            <th>Sprinter</th>
                            <th>Pickup Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Pickup Note</th>
                            <th>Station</th>
                            <th>Account</th>
                            <th>Product</th>
                            <th>Sprinter</th>
                            <th>Pickup Date</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        <?php
                        foreach ($data as $users) {
                            // var_dump($user);
                        ?>
                            <tr>
                                <td><?php echo $users['pickup_no']; ?></td>
                                <td><?php echo $users['sta_code']; ?></td>
                                <td><?php echo $users['account_no']; ?></td>
                                <td><?php echo $users['product']; ?></td>
                                <td><?php echo $users['content']; ?></td>
                                <td><?php echo $users['pickup_date']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->



<?= $this->endsection(); ?>