<?php
// session_start();

// if (!isset($_SESSION["password"])) {
//     header("Location:index.php");
// }
?>
<?php


include_once "include/header.php";

?>

<style>
    input[type='file'] {
        opacity: 0
    }
</style>
<div class="right_col" role="main">
    <!-- <div class="container mt-5">
        <div class="row  justify-content-center">
            <div class="col-10 bg-white">
                <form action="" class="text-capitalize" method="post">
                    <h3>Add Products</h3>
                    <div class="row my-3">
                        <div class="col-3"><label for="" class="mt-2">product name</label></div>
                        <div class="col-9"><input type="text" class="form-control"></div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3"> <label for="formFile" class="form-label">Product image</label></div>
                        <div class="col-9">
                            <div class="border">
                                <input class="form-control py-5" type="file" id="formFile">
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3"><label for="" class="mt-2">add Category</label></div>
                        <div class="col-9">
                            <select name="" class="form-control" id="">
                                <option value="">------ Select Category -----</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3"><label for="" class="mt-2">add Sub Category</label></div>
                        <div class="col-9">
                            <select name="" class="form-control" id="">
                                <option value="">------ Select Sub Category -----</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-3"><label for="" class="mt-2">add micro Category</label></div>
                        <div class="col-9">
                            <select name="" class="form-control" id="">
                                <option value="">------ Select Micro Category -----</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <h3 class="my-3">Add Products details</h3>
                    <div class="row my-3">
                        <div class="col-3"><label for="" class="mt-2">Product Description</label></div>
                        <div class="col-9">
                           <textarea name="" rows="5"  class="form-control" id=""></textarea>
                        </div>
                    </div>
                    <hr>
                    <h3 class="my-3">Supplier Details</h3>
                    <div class="row my-3">
                        <div class="col-3"><label for="" class="mt-2">Product Description</label></div>
                        <div class="col-9">
                           <textarea name="" rows="5"  class="form-control" id=""></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 bg-white p-4">
                <form action="" class="text-capitalize">
                    <h5>Add products</h5>
                    <div class="row">
                        <div class="col-6 my-2">
                            <label for="" class=" ">product name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-6 my-2">
                            <label for=""> Product image</label>
                            <div class="border">
                                <input class="form-control   " type="file" id="formFile">
                            </div>
                        </div>
                        <div class="col-6 my-2">
                            <label for=""> add Category</label>
                            <select name="" class="form-control" id="">
                                <option value="">------ Select Category -----</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div>
                        <div class="col-6 my-2">
                            <label for=""> add Sub Category</label>
                            <select name="" class="form-control" id="">
                                <option value="">------ Select Sub Category -----</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div>
                        <div class="col-6 my-2">
                            <label for="">add micro Category</label>
                            <select name="" class="form-control" id="">
                                <option value="">------ Select Micro Category -----</option>
                                <option value="">1</option>
                                <option value="">1</option>
                                <option value="">1</option>
                            </select>
                        </div>
                        <div class="col-6 my-2">
                            <label for="">product Size</label>
                            <input class="form-control   " type="text" id="formFile">
                        </div>
                      <div class="col-12">
                        <hr>
                      </div>
                        <h5 class="mt-3">Product Details</h5>
                        <div class="col-12 my-2">
                            <label for="">Product Description</label>
                           <textarea name="" rows="5"  class="form-control" id=""></textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- /page content -->
<?php
include_once "include/footer.php";
?>