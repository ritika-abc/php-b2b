<?php


include_once "include/header.php";

// form 1

include "config.php";
if (isset($_POST['submit'])) {

    $user_website = $_POST['user_website'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $product_name = $_POST['product_name'];
    $gst = $_POST['gst'];
    // 


     // image
    //  $_FILES is a super global variable which can be used to upload files
    $product_image = $_FILES["product_image"]["name"];
    $fld1 = "user-product-image/" . $product_image;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["product_image"]['tmp_name'], $fld1);

    $insert = "INSERT INTO `user`(`user_website`, `state`, `city`, `pincode`,`product_name`,`gst`,`product_image`) VALUES ('$user_website','$state','$city','$pincode','$product_name','$gst','$fld1 ')";
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
                    <!-- <button class="section my-2 text-capitalize   btn btn-light px-4  border disabled  rounded-pill ">create account</button>
                    <button class="section my-2 text-capitalize   btn btn-light px-4  border disabled  rounded-pill ">Company Details</button>
                    <button class="section my-2 text-capitalize   btn btn-light px-4  disabled border  rounded-pill ">add GST</button> -->

                    <!-- Tabs -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <div id="wizard_verticle" class="form_wizard wizard_verticle">
                            <ul class="list-unstyled wizard_steps">
                                <li>
                                    <a href="#step-11">
                                        <span class="step_no">1</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-22">
                                        <span class="step_no">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-33">
                                        <span class="step_no">3</span>
                                    </a>
                                </li>
                            </ul>

                            <div id="step-11">
                                <!-- <h2 class="StepTitle">Step 1 Content</h2> -->
                                <!-- <button class="section my-2   btn btn-primary px-4 disabled  rounded-pill">Company Details</button> -->
                                <div class="">
                                    <button class="section my-2 text-capitalize   btn btn-primary px-4  border disabled  rounded-pill ">Company details</button>

                                    <div class="bg-white p-4 rounded">
                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">Your Website</div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" name="user_website" class="form-control" placeholder="Website*">
                                            </div>
                                        </div>

                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">Primary Business*</div>
                                            <div class="col-12 col-lg-9">
                                                <select name="" class="form-control py-2" size="" id="">
                                                    <option value="">----- SELECT-----</option>
                                                    <option value="">Delhi</option>
                                                    <option value="">Delhi</option>
                                                    <option value="">Delhi</option>
                                                    <option value="">Delhi</option>
                                                    <option value="">Delhi</option>
                                                    <option value="">Delhi</option>
                                                    <option value="">Delhi</option>
                                                    <option value="">Delhi</option>
                                                    <option value="">Delhi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">select state*</div>
                                            <div class="col-12 col-lg-9">
                                                <select name="state" class="form-control py-2" size="" id="">
                                                    <option value="">----- SELECT-----</option>
                                                    <option value="any state">Delhi</option>
                                                    <option value="any state">Delhi</option>
                                                    <option value="any state">Delhi</option>
                                                    <option value="any state">Delhi</option>
                                                    <option value="any state">Delhi</option>
                                                    <option value="any state">Delhi</option>
                                                    <option value="any state">Delhi</option>
                                                    <option value="any state">Delhi</option>
                                                    <option value="any state">Delhi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">select city*</div>
                                            <div class="col-12 col-lg-9">
                                                <select name="city" class="form-control py-2" size="" id="">
                                                    <option value="">----- SELECT-----</option>
                                                    <option value="any city">Delhi</option>
                                                    <option value="any city">Delhi</option>
                                                    <option value="any city">Delhi</option>
                                                    <option value="any city">Delhi</option>
                                                    <option value="any city">Delhi</option>
                                                    <option value="any city">Delhi</option>
                                                    <option value="any city">Delhi</option>
                                                    <option value="any city">Delhi</option>
                                                    <option value="any city">Delhi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">pincode*</div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" name="pincode" placeholder="Pincode*" class="form-control">
                                                <!-- <input type="submit" value="Submit" name="submit_1" class="btn btn-danger mt-3"> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- subbmit 2 start here  -->
                            <div id="step-22">
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
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="step-33">
                                <div class="col-12">
                                    <button class="section my-2 text-capitalize   btn btn-primary px-4  border disabled  rounded-pill ">GST Details</button>
                                </div>
                                <div class="bg-white p-3 my-3">
                                    <input type="text" name="gst" placeholder="Enter Your GST" class="form-control my-3">
                                    <input type="submit" name="submit" class="btn btn-danger px-3 mt-3 w-25">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End SmartWizard Content -->
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