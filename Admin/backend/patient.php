<?php
include '../includes/connect.php';
if (isset($_POST['btnSave'])) {
    $Name = $_POST['Name'];
    $Tell = $_POST['Tell'];
    $District = ($_POST['District']);
    $Department = $_POST['Department'];
    // $role = $_POST['role'];
    $sql = "INSERT INTO patient_registration (P_name,Tell,District,Department) VALUES('$Name','$Tell','$District','$Department' )";
    $q = mysqli_query($conn, $sql);
    if ($q) {

        echo "<script>alert('successfully saved'); location='../managepatient.php';</script>";
    }
    else{
        echo "error".mysqli_error($conn);
    }
}

// <?php
// include '../includes/connect.php';
// //save
// if (isset($_POST['btnSave'])) {
//     $name = $_POST['name'];
//     $code = $_POST['code'];

//     $sql = "INSERT INTO patient_registration (name,code) VALUES('$name','$code')";
//     $q = mysqli_query($conn, $sql);
//     if ($q) {

//         echo "<script>alert('successfully saved'); location='../managepatient.php';</script>";
//     }
// }
//delete
if (isset($_GET['pid'])) {
    $id = $_GET['pid'];
    $del = "DELETE FROM patient_registration WHERE id='$id'";
    $q = mysqli_query($conn, $del);
    if ($q) {
        echo "<script>alert('Successfully Deleted'); location='../managepatient.php';</script>";
    } else {
        echo "error" . mysqli_error($conn);
    }
}
//update
if (isset($_POST['btnUpdate'])) {
    $name = $_POST['name'];
    $code = $_POST['code'];

    $id = $_POST['id'];
    $sql = "UPDATE patient_registration SET name='$name', code='$code'
    WHERE id='$id'";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo "<script>alert('successfully Updated'); location='../managepatient.php';</script>";
    } else {
        echo "error";
    }
}


