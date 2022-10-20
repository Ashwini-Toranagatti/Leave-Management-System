<?php 
 // session_start();
 // echo "hello";

  //if(isset($_POST['submit'])){

    
 // }


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LMS | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include_once('includes/header.php');?>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Login Name</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <!--form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form-->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>

                    <li>
                        <a href="pages/mailbox/mailbox.html">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <i class="fa fa-arrow-circle-right"></i>
                            </span>
                        </a>
                    </li>




                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <!-- Main content -->
            <section class="container">
                
                    <div class="row">


                    <div class="login-logo">
                                    <h1><i class="fa fa-user"></i> Leave Application</h1>
                                </div>


                        <div class=" login-page">
                            <div class="login-box">
                               <!-- /.login-logo -->
                                <div class="login-box-body">


                                    <form action="login_authenticate.php" method="post">
                                        <div class="form-group has-feedback">
                                            <label class="form-control-label">Employee id</label>
                                            <input type="text" name="name" class="form-control" placeholder="emp_id" />

                                            <label class="form-control-label">Department id</label>
                                             
                            <Select class="form-control" name="department" id="dept">
                                <option value="0">Choose the field
                                <option>
                                <option value="1">Computer Science
                                <option>

                                <option value="2">Information Science
                                <option>

                                <option value="3">Electrical
                                <option>
                                <option value="4">Electrical and Electronics
                                <option>
                                <option value="5">Mechanical
                                <option>
                                <option value="6">Civil
                                <option>
                                <option value="7">Aeronautical
                                <option>





                            </select>
                            
                            <label>Gender</label>       
                        <Select class="form-control" name="gender" id="gen">
                            <option value="">choose the field
                            <option>
                            <option value="1">Male
                            <option>
                            <option value="0">Female
                            <option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Designation</label>

                        <Select class="form-control" name="designation" id="design">

                            <option value="0">Choose the field
</option>
                            <option value="1">Principal
</option>
                                <optgroup label="Dean">
                                    <option value="4">Administrator
                                    <option>

                                    <option value="5">Infrastructure
                                    <option>
                                    <option value="6">Research and Development
                                    <option>
                                </optgroup>
                                <optgroup label="Hod">
                                    <option value="7">Computer Science Department
                                    <option>
                                    <option value="8">Information Science Department
                                    <option>
                                    <option value="9">Electrical Department
                                    <option>
                                    <option value="10">Electrical Department
                                    <option>
                                    <option value="11">Mechanical Department
                                    <option>
                                    <option value="12">Civil Department
                                    <option>
                                    <option value="13">Aeronautical Department
                                    <option>
                                </optgroup>
                                <optgroup label="Teaching Staff">
                                    <option value="14">Professor
                                    <option>
                                    <option value="15">Assistant Professor
                                    <option>
                                    <option value="16">Associate Professor
                                    <option>
                                </optgroup>
                                <optgroup label="Non Teaching Staff">
                                    <option value="17">Lab Instructor
                                    <option>
                                    <option value="18">Clerk
                                    <option>
                                    <option value="19">Placement Officer
                                    <option>
                                    <option value="20">Librarian
                                    <option>

                                </optgroup>


                        </select>
                                                    <label class="form-control-label">Form-Date</label>
                                                    <input type="date" name="fromdate" class="form-control" />
                                                    <label class="form-control-label">To-Date</label>
                                                    <input type="date" name="todate" class="form-control" />
                                                    <label class="form-control-label">Alternative Person id</label>
                                                    <input type="text" name="Alter_id" class="form-control" value="Alternative Person id" />
                                                    <label class="form-control-label">Type Of Leaves</label>
                                                    <select name="department" class="form-control">
                                                    <option value="0">Choose the field</option>
                                                        <option value="1">Cl</option>
                                                        <option value="2">DL</option>
                                                        <option value="3">El</option>
                                                        <option value="4">Rl</option>
                                                        <option value="5">Ul</option>
                                                        <option value="6">ML</option>
                                                    </select>
                                                    <label>Reason For Leave</label>
                                                    <textarea name="" class="form-control"></textarea>
                                                    <br>
                                                    <label>Additional document</label>
                                                    <input type="file" id="myFile" name="filename">
                                                    
                                                    <div class="text-center">
                                                    <input type="submit" name="submit" class="btn btn-primary"
                                                        style="border-radius:0%;" value="submit" />
    </div>
                                        </div>                                         
                                        </div>
                                    </form>

                                </div>
                                <!-- /.login-box-body -->
                            </div>
                            <!-- /.login-box -->
                        </div>
                        <!-- jQuery 2.2.3 -->
                        <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
                        <!-- Bootstrap 3.3.6 -->
                        <script src="bootstrap/js/bootstrap.min.js"></script>
                        <!-- iCheck -->
                        <script src="plugins/iCheck/icheck.min.js"></script>
                        <script>
                        $(function() {
                            $('input').iCheck({
                                checkboxClass: 'icheckbox_square-blue',
                                radioClass: 'iradio_square-blue',
                                increaseArea: '20%' // optional
                            });
                        });
                        </script>
                        <br><br><br><br><br><br><br><br><br>

                        <script src="js/jquery.min.js"></script>
                        <script src="js/tether.min.js"></script>
                        <script src="js/bootstrap.min.js"></script>
                        <script src="https://cdn.ckeditor.com/4.9.1/standard/ckeditor.js"></script>
                        <script>
                        CKEDITOR.replace('editor1');
                        </script>

































































                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col -->
                        <section class="col-lg-7 connectedSortable">


                        </section>
                        <!-- /.Left col -->
                        <!-- right col -->
                        <section class="col-lg-5 connectedSortable">

                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->


                        </section>
                        <!-- right col -->
                    </div>




                    <!-- /.row (main row) -->



            </section>


            <!-- right col -->
        </div>




        <!-- /.row (main row) -->




        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <!--footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.3.5
            </div>
            <strong>Copyright &copy; 2022 <a href="http://eyesec.in">LMS- EyeSec CyberSecurity Solutions Pvt.
                    Ltd</a>.</strong> All rights
            reserved.
        </footer!-->


    <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>


</html>