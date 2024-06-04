<?php
session_start();
if (!$_SESSION['userID']) {
    header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expense management System-New users</title>

</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <?php
        include 'includes/aside.php';

        ?>
        <aside class="right-side">




            <!-- Main content -->
            <section class="content">


                <div class="card">
                    <div class="box box-primary">
                        <div class="box-header">
                            <?php
                           {


                            ?>
                                <h3 class="box-title">Patient Registration Form</h3>
                        </div><!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="backend/patient.php" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Patient Name</label>
                                    <input type="text" name="Name" class="form-control" placeholder="Enter fullname">
                                </div>
                           
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tell</label>
                                    <input type="text" name="Tell" class="form-control" placeholder="Enter Tell">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">District</label>
                                    <input type="text" name="District" class="form-control" placeholder="District">
                                    <div class="form-group">
                                     
                                </div>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">department</label>
                                    <select class="form-control" name="Department">
                                        <option>--Select your Department</option>
                                        <option>Pediatric</option>
                                        <option>General Medicine</option>
                                         <option>Surgery</option>
                                         <option>ENT </option>
                                         <option>Obs/Gyn</option>
                                         
                                         
                                    </select>
                                </div>

                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" name="btnSave" class="btn btn-primary">Done</button>
                            </div>
                        <?php } ?>
                        </form>
                    </div>
                </div>



            </section><!-- /.content -->
        </aside>
    </div>
     
</body>

</html>