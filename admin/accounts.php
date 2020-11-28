<?php include "partials/_header.php"; ?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Accounts</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>username</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Birth date</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>username</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Birth date</th>
                        <th>Level</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>tigernixon</td>
                        <td>tigernixon@user.com</td>
                        <td>Male</td>
                        <td>2000-04-25</td>
                        <td>User</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "partials/_footer.php"; ?>