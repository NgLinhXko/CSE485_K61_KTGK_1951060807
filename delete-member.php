<?php

include('config/db.php');
$id = $_GET['bd_id'];
$sql = "DELETE FROM blood_dornor WHERE bd_id = $id";
$res = mysqli_query($conn, $sql);
if ($res == true) {
    $_SESSION['delete'] = "<div class='success'>Member Deleted Successfully.</div>";
    header("location:" . 'http://localhost:8080/CSE485_K61_KTGH_1951060807/CSE485_K61_KTGK_1951060807/manage-member.php');
} else {
    $_SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again Later.</div>";
    header("location:" . 'http://localhost:8080/CSE485_K61_KTGH_1951060807/CSE485_K61_KTGK_1951060807/error.php');
}
