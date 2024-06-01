<?php
// session_start();

// if (!isset($_SESSION["password"])) {
//     header("Location:index.php");
// }
?>
<?php


include_once "include/header.php";

?>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-4">
                   <?php include_once "profile.php"?>
                </div>
                <div class="col-8">
                    <form action="">
                        <input type="text" class="form-control" placeholder="Enter Your Name">
                    </form>
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