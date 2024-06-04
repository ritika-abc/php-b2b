<div class="profile_card bg-white py-3">
    <div class="profile-image py-5 bg-dark  text-center  m-auto d-flex justify-content-center align-items-center" style="height: 150px;width:150px;border-radius:50%">
        <img src="photo.png" height="100px" width="100px" alt="profile image">
    </div>
    <!-- <table class="table my-3 text-capitalize">
        ?php
        include "config.php";
        // session_start();

       

        if (isset($_GET['user_email'])) {
            $user_email = $_GET["user_email"];
            $sel = "SELECT * from `user` where `user_email`='$user_email'";
         
               
        // $sel = "SELECT * FROM `user` where `user_email`='$user_email_box'";
        $query = mysqli_query($con, $sel);
        $sno = 1;
        while ($row = mysqli_fetch_array($query)) {

        ?>
            <tr>
                <th>Name ?php echo $_SESSION["user_email"] ?> </th>
                <td>?php echo $row["user_name"] ?></td>
            </tr>
            <tr>
                <th>email</th>
                <td>?php echo $row["user_email"] ?></td>
            </tr>
            <tr>
                <th>number</th>
                <td>?php echo $row["user_phone"] ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td>102-AMORA ARCADE NR MOUNI INTERNATIONAL SCHOOL UTRAN SURAT SURAT GUJARAT </td>
            </tr>
            <tr>
                <th>company name</th>
                <td>Global p. l. </td>
            </tr>
            <tr>
                <th>Your Plan</th>
                <td class="text-danger">PRIME ₹23,999 /Year </td>
            </tr>
            <tr>
                <th>Your Plan expire</th>
                <td class="text-danger"> XX-XX-XXXX </td>
            </tr>
            <tr>
                <th> register date</th>
                <td>1 january 2024 </td>
            </tr>
        ?php } } ?>
    </table> -->



    <table class="table table-hover table-white table-bordered text-capitalize">
        <thead>
            <tr>
                <td>user name</td>
                <td>email</td>
            </tr>
        </thead>
        <tbody>
            <?php
            include "config.php";
            if ($_SESSION['user_role'] == 0) {
                $user_name = $_SESSION['user_name'];

                $sel = "SELECT * from `user` where `user_id` = '$user_name'";
            } else {
                $user_name = $_SESSION['user_name'];

                $sel = "SELECT * from `user` where `user_name` = '$user_name'";
            }
            // $sel = "SELECT * FROM `user_role`";
            $query = mysqli_query($con, $sel);
            $sno = 1;
            while ($row = mysqli_fetch_array($query)) {

                $role = $_SESSION['user_role'];         ?>
                <tr>
                    <td><?php echo $row['user_email'] ?></td>
                    <td class="text-lowercase"><?php echo $row['user_name'] ?></td>
                </tr>
            <?php
                $sno++;
            }
            ?>
        </tbody>
    </table>
    <hr>

    <a href="" class="mx-3">Edit Your Profile</a>
</div>