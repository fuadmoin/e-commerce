<!DOCTYPE html>
<html>

<?php


include ("admin_partial/Head.php");
include ("admin_partial/Header.php");
include ("admin_partial/Aside.php")




?>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


    <!-- Left side column. contains the logo and sidebar -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-6">
                    <form role="form" action="catHandler.php" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                            </div>
<!--                            <div class="form-group">-->
<!--                                <label for="exampleInputPassword1">Password</label>-->
<!--                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">-->
<!--                            </div>-->
<!--                            <div class="form-group">-->
<!--                                <label for="exampleInputFile">File input</label>-->
<!--                                <input type="file" id="exampleInputFile">-->
<!---->
<!--                                <p class="help-block">Example block-level help text here.</p>-->
<!--                            </div>-->
<!--                            <div class="checkbox">-->
<!--                                <label>-->
<!--                                    <input type="checkbox"> Check me out-->
<!--                                </label>-->
<!--                            </div>-->
<!--                        </div>-->
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->


    <?php


    include ("admin_partial/footter.php");





    ?>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
