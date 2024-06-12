<?php


include_once "include/header.php";

?>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
       <div class="col-12">
       <form action="" class="my-5  d-flex">
            <input type="search" placeholder="Search Here By Product Name" name="search" class="form-control w-75 rounded float-end">
            <input type="submit" class="btn-sm btn-success">
        </form>
       </div>
        <div class="col-12">
            <div class="col-md-12">
                <?php
                include "config.php"; // database configuration
                /* Calculate Offset Code */
                $limit = 15;
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $offset = ($page - 1) * $limit;
                /* select query of user table with offset and limit */
                $sql = "SELECT * FROM  buyleads ORDER BY  buyleads_id DESC LIMIT {$offset},{$limit}";
                $result = mysqli_query($con, $sql) or die("Query Failed.");
                if (mysqli_num_rows($result) > 0) {
                ?>
                    <table class="table  table-striped table-light table text-capitalize">
                        <thead>
                            <th>S.No.</th>
                            <th>buyer name</th>
                            <th>enquiry for</th>
                            <th>number</th>
                            <th>click here</th>
                        </thead>
                        <tbody>
                            <?php
                            $serial = $offset + 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class='id'><?php echo $serial; ?></td>
                                    <td><?php echo $row['buyer_name']; ?></td>
                                    <td><?php echo $row['queiry_for']; ?></td>
                                    <td><?php echo $row['number']; ?></td>
                                    <td><a href="accesses-buyleads.php?buyleads_id=<?php echo $row['buyleads_id'] ?>" class="btn btn-danger">click here</a></td>
                                </tr>
                            <?php
                                $serial++;
                            } ?>
                        </tbody>
                    </table>
                <?php
                } else {
                    echo "<h3>No Results Found.</h3>";
                }
                // show pagination
                $sql1 = "SELECT * FROM  buyleads";
                $result1 = mysqli_query($con, $sql1) or die("Query Failed.");

                if (mysqli_num_rows($result1) > 0) {

                    $total_records = mysqli_num_rows($result1);

                    $total_page = ceil($total_records / $limit);

                    echo '<ul class="pagination ">';
                    if ($page > 1) {
                        echo '<li class="page-item"><a class="page-link" href="view-product.php?page=' . ($page - 1) . '">Prev</a></li>';
                    }
                    for ($i = 1; $i <= $total_page; $i++) {
                        if ($i == $page) {
                            $active = "activebtn";
                        } else {
                            $active = " ";
                        }
                        echo '<li class="page-item' . $active . '"><a class="page-link"  href="view-product.php?page=' . $i . '">' . $i . '</a></li>';
                    }
                    if ($total_page > $page) {
                        echo '<li class="page-item"><a class="page-link" href="view-product.php?page=' . ($page + 1) . '">Next</a></li>';
                    }

                    echo '</ul>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<br />
</div>




<!-- /page content -->
<?php
include_once "include/footer.php";
?>