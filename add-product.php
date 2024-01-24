<?php
include "helper/db.php";
if ($_POST) {
    $pname = mysqli_real_escape_string($con, $_POST['pro_name']);
    $pprice = mysqli_real_escape_string($con, $_POST['pro_price']);
    $pdetail = mysqli_real_escape_string($con, $_POST['pro_detail']);

    $query = mysqli_query($con, "INSERT INTO tbl_product(pro_name,pro_price,pro_detail)VALUES('$pname','$pprice','$pdetail')") or die(mysqli_error($con));
    if ($query) {
        echo "<script>alert('Product Added.');window.location='add-product.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php include 'components/header.php'; ?>
        <?php include 'components/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Product</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Product</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- Horizontal Form -->
                            <div class="card card-info">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h3 class="card-title">Add Product</h3>
                                        <a href="display-product.php" class="btn btn-success">View Product</a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal" method="post" enctype="multipart/form-data" id="addProductForm" name="addProductForm">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="pro_name" class="col-sm-2 col-form-label">Product Name :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="pro_name" id="pro_name" placeholder="Product Name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pro_price" class="col-sm-2 col-form-label">Product Price :</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="pro_price" id="pro_price" placeholder="Product Price" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="pro_detail" class="col-sm-2 col-form-label">Product Detail :</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="pro_detail" id="pro_detail" placeholder="Product Detail" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-2"></div>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Add Product</button>
                                                <button type="reset" class="btn btn-danger">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <?php include 'components/footer.php'; ?>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>