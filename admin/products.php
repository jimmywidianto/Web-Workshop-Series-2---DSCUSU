<?php include "partials/_header.php"; ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Products</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Price</th>
                        <th>Sold</th>
                        <th>Created</th>
                        <th>Modified</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Price</th>
                        <th>Sold</th>
                        <th>Created</th>
                        <th>Modified</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>Male</td>
                        <td>Rp. 1.800.000</td>
                        <td>20</td>
                        <td>2000-04-25</td>
                        <td>2020-04-25</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "partials/_footer.php"; ?>