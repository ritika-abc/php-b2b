<?php
// image is a logo

include_once "include/header.php";

// form 1

include "config.php";
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
}

$sql = "SELECT* FROM `user` WHERE `user_id`='$user_id'";
$query = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query)) {
    # to select all the data
   
    
    $user_phone = $row['user_phone'];
    $company_name = $row['company_name'];
    $company_address = $row['company_address'];
    $user_website = $row['user_website'];
    $state = $row['state'];
    $city = $row['city'];
    $pincode = $row['pincode'];
    $gst = $row['gst'];
    $iec_code = $row['iec_code'];
    $type = $row['type'];
    $image = $row['image'];
}

?>
<?php

//  update
include "config.php";
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];
}
if (isset($_POST['submit'])) {

 
    $user_phone = $_POST['user_phone'];
    $company_name = $_POST['company_name'];
    $company_address = $_POST['company_address'];
    $user_website = $_POST['user_website'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $gst = $_POST['gst'];
    $iec_code = $_POST['iec_code'];
    $type = $_POST['type'];
    // image
    //  $_FILES is a super global variable which can be used to upload files
    $image = $_FILES["image"]["name"];
    $fld1 = "logo/" . $image;
    // $fld2 = "upload/" . $image;
    move_uploaded_file($_FILES["image"]['tmp_name'], $fld1);

    if ($image == "") {
        $sql1 = "UPDATE `user` SET   `user_phone`='$user_phone',`company_name`='$company_name',`company_address`='$company_address',`user_website`='$user_website',`state`='$state',`city`='$city',`pincode`='$pincode',`product_name`='$product_name',`gst`='$gst',`iec_code`='$iec_code',`type`='$type' WHERE  `user_id`='$user_id'";
        $query1 = mysqli_query($con, $sql1) or die("Quiry fail !");
        
        
    } else {
        $sql1 = "UPDATE `user` SET   `user_phone`='$user_phone',`company_name`='$company_name',`company_address`='$company_address',`user_website`='$user_website',`state`='$state',`city`='$city',`pincode`='$pincode',`product_name`='$product_name',`gst`='$gst',`iec_code`='$iec_code',`type`='$type',`image`='$fld1' WHERE  `user_id`='$user_id'";
        $query1 = mysqli_query($con, $sql1) or die("dgdgdfgdfg");
        // The die() function prints a message and exits the current script
        if ($query) {
            header("location:index.php");
        }
    }
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
                    <?php

                    ?>
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
                                                <input type="text" name="user_website" value="<?php echo $user_website; ?>" class="form-control" placeholder="Website*">
                                            </div>
                                        </div>

                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">Primary Business*</div>
                                            <div class="col-12 col-lg-9">
                                                <select name="type" class="form-control py-2" size="" id="">
                                                    <option value="">----- Select Primary Business -----</option>
                                                    <option value="exporter">Exporter</option>
                                                    <option value="supplier">Supplier</option>
                                                    <option value="">Manufacturer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">select state*</div>
                                            <div class="col-12 col-lg-9">
                                                <select name="state" class="form-control py-2" size="" id="">
                                                    <option value="">----- SELECT-----</option>
                                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                                    <option value="Assam">Assam</option>
                                                    <option value="Bihar">Bihar</option>
                                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                                    <option value="Goa">Goa</option>
                                                    <option value="Gujarat">Gujarat</option>
                                                    <option value="Haryana">Haryana</option>
                                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                                    <option value="Jharkhand">Jharkhand</option>
                                                    <option value="Karnataka">Karnataka</option>
                                                    <option value="Kerala">Kerala</option>
                                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                    <option value="Maharashtra">Maharashtra</option>
                                                    <option value="Manipur">Manipur</option>
                                                    <option value="Meghalaya">Meghalaya</option>
                                                    <option value="Mizoram">Mizoram</option>
                                                    <option value="Nagaland">Nagaland</option>
                                                    <option value="Odisha">Odisha</option>
                                                    <option value="Punjab">Punjab</option>
                                                    <option value="Rajasthan">Rajasthan</option>
                                                    <option value="Sikkim">Sikkim</option>
                                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                                    <option value="Telangana">Telangana</option>
                                                    <option value="Tripura">Tripura</option>
                                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                    <option value="Uttarakhand">Uttarakhand</option>
                                                    <option value="West Bengal">West Bengal</option>
                                                    <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                    <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                                    <option value="Chandigarh">Chandigarh</option>
                                                    <option value="Jammu and Kashmir">Jammu and Kashmirh</option>
                                                    <option value="Ladakh">Ladakh</option>
                                                    <option value="Lakshadweep">Lakshadweep</option>
                                                    <option value="Puducherry">Puducherry</option>
                                                    <option value="Delhi">Delhi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">select city*</div>
                                            <div class="col-12 col-lg-9">
                                                <select name="city" class="form-control py-2" size="" id="">
                                                    <option value="">----- SELECT-----</option>
                                                    <option value="any city">Delhi</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">pincode*</div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" value="<?php echo $pincode; ?>" name="pincode" placeholder="Pincode*" class="form-control">
                                                <!-- <input type="submit" value="Submit" name="submit_1" class="btn btn-danger mt-3"> -->
                                            </div>
                                        </div>
                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">Phone Number*</div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" value="<?php echo $user_phone; ?>" name="user_phone" placeholder="Number" class="form-control">
                                                <!-- <input type="submit" value="Submit" name="submit_1" class="btn btn-danger mt-3"> -->
                                            </div>
                                        </div>
                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">Company Name*</div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" value="<?php echo $company_name; ?>" name="company_name" placeholder="company name" class="form-control">
                                                <!-- <input type="submit" value="Submit" name="submit_1" class="btn btn-danger mt-3"> -->
                                            </div>
                                        </div>
                                        <div class="row text-capitalize mb-3">
                                            <div class="col-12 col-lg-3 mt-2">Company Address*</div>
                                            <div class="col-12 col-lg-9">
                                                <input type="text" value="<?php echo $company_address; ?>" name="company_address" placeholder="company Address" class="form-control">
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
                                                    <h2>Company's Logo </h2>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <input type="file" name="image" value="<?php echo $image; ?>" class="w-100 form-control py-5">
                                                    <input type="text" name="product_name" value="<?php echo $product_name; ?>" placeholder="Enter Product / Service Name" class="form-control my-3">
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
                                    <input type="text" name="gst" value="<?php echo $gst; ?>" placeholder="Enter Your GST" class="form-control my-3">
                                    <input type="text" name="iec_code" value="<?php echo $iec_code; ?>" placeholder="Enter Your IEC Code" class="form-control my-3">
                                    <input type="submit" name="submit" class="btn btn-danger px-3 mt-3 w-25">
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php ?>
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