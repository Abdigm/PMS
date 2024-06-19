<?php
include '../includes/connect.php';
if (isset($_POST['btnSave'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role = $_POST['role'];
    $sql = "INSERT INTO users (name,email,role,password) VALUES('$name','$email','$role','$password')";
    $q = mysqli_query($conn, $sql);
    if ($q) {

        echo "<script>alert('successfully saved'); location='../manageusers.php';</script>";
    }
}

//update
if (isset($_POST['btnUpdate'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = ($_POST['password']);
    $role = $_POST['role'];
    $id = $_POST['id'];
    $sql = "UPDATE users SET name='$name', email='$email' password='$password' role='$role'
    WHERE id='$id'";
    $q = mysqli_query($conn, $sql);
    if ($q) {
        echo "<script>alert('successfully Updated'); location='../manageusers.php';</script>";
    } else {
        echo "error";
    }
}