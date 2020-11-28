<?php include "partials/_header.php"; ?>
<?php
include "../database/connecton.php";

$query = "SELECT * FROM products ORDER BY id DESC";

$stmt = $con->prepare($query);
$stmt->execute();
?>

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

                    <?php
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($rows as $row):
                        extract($row);
                    ?>

                    <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $gender; ?></td>
                        <td>Rp. <?php echo number_format($price,0,'','.'); ?></td>
                        <td><?php echo $sold; ?></td>
                        <td><?php echo $created; ?></td>
                        <td><?php echo $modified; ?></td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "partials/_footer.php"; ?>