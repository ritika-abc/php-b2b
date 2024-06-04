<!-- profile page -->


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
            <div class="row justify-content-between">
                <div class="col-12 col-lg-4 mb-5">
                    <?php include_once "profile.php" ?>
                    <!-- <div class="border-bottom border-danger border-5"></div> -->
                </div>
                <div class="col-12 col-lg-7">
                    <form action="" class="bg-white py-2  pb-4 px-3 shadow-lg rounded">
                        <div class="row mb-3 ">
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill disabled">Company Details</button>
                                <button class="btn btn-light rounded-pill disabled">Product & Services</button>
                                <button class="btn btn-light rounded-pill disabled">Add GST</button>
                            </div>
                        </div>
                        <div class="row text-capitalize mb-3">
                            <div class="col-12 col-lg-3 mt-2">company name</div>
                            <div class="col-12 col-lg-9">
                                <input type="text" class="form-control" placeholder="Company Name*">
                            </div>
                        </div>
                        <div class="row text-capitalize mb-3">
                            <div class="col-12 col-lg-3 mt-2">Primay Business*</div>
                            <div class="col-12 col-lg-9">
                                <input type="text" class="form-control" placeholder="Primay Business*">
                            </div>
                        </div>
                        <div class="row text-capitalize mb-3">
                            <div class="col-12 col-lg-3 mt-2">Website</div>
                            <div class="col-12 col-lg-9">
                                <input type="text" class="form-control" placeholder="Website*">
                            </div>
                        </div>
                        <div class="row text-capitalize mb-3">
                            <div class="col-12 col-lg-3 mt-2">company address*</div>
                            <div class="col-12 col-lg-9">
                                <textarea name="" rows="3" class="form-control" id=""></textarea>
                            </div>
                        </div>
                        <div class="row text-capitalize mb-3">
                            <div class="col-12 col-lg-3 mt-2">select state*</div>
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
                            <div class="col-12 col-lg-3 mt-2">select city*</div>
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
                            <div class="col-12 col-lg-3 mt-2">pincode*</div>
                            <div class="col-12 col-lg-9">
                                <input type="text" placeholder="Pincode*" class="form-control">
                                <input type="text" value="Submit" class="btn btn-danger mt-3">
                            </div>
                        </div>
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