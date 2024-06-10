<?php


include_once "include/header.php";

// form 1

include "config.php";
if (isset($_POST['submit'])) {
 
    // 


    // image
    //  $_FILES is a super global variable which can be used to upload files
    $product_image = $_FILES["product_image"]["name"];
    $fld1 = "user-product-image/" . $product_image;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["product_image"]['tmp_name'], $fld1);

    $insert = "INSERT INTO `user`(`product_image`) VALUES ('$fld1 ')";
    $query = mysqli_query($con, $insert);
}
?>
<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-lg-4 mb-5">
                    <?php include_once "profile.php" ?>
                </div>
                <div class="col-12 col-lg-8 text-capitalize ">
                    
                    <form action="" method="post" enctype="multipart/form-data">
                        <div  class="form_wizard wizard_verticle"> <!-- subbmit 2 start here  -->
                            <div id=" ">
                                <div class="col-12">
                                    <button class="section my-2 text-capitalize   btn btn-primary px-4  border disabled  rounded-pill ">Product & services</button>
                                </div>
                                <form class="form-horizontal form-label-left mt-3">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12  ">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Product image </h2>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <input type="file" name="product_image" class="w-100 form-control py-5">
                                                    <input type="text" name="product_name" placeholder="Enter Product/Service Name" class="form-control my-3">
                                                </div>
                                                <input type="submit" name="submit" class="btn btn-danger px-3 mt-3 w-25">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
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