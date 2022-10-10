<?php
require_once '../db_connect.php';

if (isset($_POST['edit_pc_details'])) {
    $pc_id = mysqli_real_escape_string($conn, $_POST['pc_id']);
    $lab_no = mysqli_real_escape_string($conn, $_POST['lab_no']);
    $pc_details = mysqli_real_escape_string($conn, $_POST['pc_details']);
    $pc_softwares = mysqli_real_escape_string($conn, $_POST['pc_softwares']);
    $pc_condition = mysqli_real_escape_string($conn, $_POST['pc_condition']);
    $pc_query = mysqli_real_escape_string($conn, $_POST['pc_query']);

    $sql1 = "UPDATE `stock`.`pc_lab312` SET `pc_details`='$pc_details', `pc_softwares`='$pc_softwares', `pc_query`='$pc_query', `pc_condition` = '$pc_condition' WHERE `pc_id` = '$pc_id';";
    $sql_run1 = mysqli_query($conn, $sql1);

    if ($sql_run == true) {
        $_SESSION['success'] = 'Pc Details Updated Successfully.';
    } else {
        $_SESSION['error'] = 'Something Went Wrong!! Please Try Again.';
    }
    header("Location: display_lab.php?lab_no=$lab_no");
} else {
    $_SESSION['error'] = 'Something Went Wrong!! Please Try Again.';
}
