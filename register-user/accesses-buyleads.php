<?php


include_once "include/header.php";

?>


<?php
 

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Assume user is authenticated and their ID is stored in $user_id

// Check if user has reached their monthly limit
$user_id = 1; // Example user ID
$limit = 20; // Monthly limit
$month = date('m'); // Current month

$sql = "SELECT COUNT(*) AS total_leads FROM buyleads WHERE buyleads_id  = $user_id AND MONTH(accessed_at) = $month";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$total_leads = $row['total_leads'];

if ($total_leads >= $limit) {
    echo "You have reached your monthly limit of $limit buy leads.";
    exit;
}

// If user hasn't reached their limit, allow access to buy leads

// Record the access of buy lead
$sql = "INSERT INTO buy_lead_access (user_id, accessed_at) VALUES ($user_id, NOW())";
if ($conn->query($sql) === TRUE) {
    echo "Buy lead access recorded successfully.";
} else {
    echo "Error recording buy lead access: " . $conn->error;
}

// Close connection
$conn->close();
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
            <div class="card p-3">
                <h1>name</h1>
                <h1>number</h1>
                <h1>quiry for</h1>
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