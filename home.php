<?php 
  session_start();
 // echo "hello";

  if(isset($_POST['submit'])){

    
 }
                                 
 include('dbconnection.php');
 include('pages/required/functions.php');


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx">



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
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Employee list</span>
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
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="Checking.php"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <ul>
                    <div class="row">
                        <div class="col-lg-2 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <li>
                                        <h3>CL</h3>
                                    </li>
                                    <?php
                                                               
                                                               $query = "SELECT CL 
                                                                           FROM leave_entitle 
                                                                          WHERE status=1"; 

                                                                      $query_run=db_one($query);
                                                                      echo  $query_run['CL'];
                                                                                                    
                                                             ?>

                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="Checking.php" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>DL<sup style="font-size: 20px"></sup></h3>
                                    <?php
                                                               
                                                               $query = "SELECT COUNT(DL) AS dl_count 
                                                                           FROM leave_entitle 
                                                                          WHERE status=1"; 
                                                                          
                                                                      $query_run=db_one($query);
                                                                      echo  $query_run['dl_count'];
                                                                                                    
                                                             ?>

                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="Checking.php" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-navy">
                                <div class="inner">
                                    <h3>EL<sup style="font-size: 20px"></sup></h3>
                                    <?php
                                                               
                                                               $query = "SELECT COUNT(EL) AS el_count 
                                                                           FROM leave_entitle 
                                                                          WHERE status=1"; 
                                                                          
                                                                      $query_run=db_one($query);
                                                                      echo  $query_run['el_count'];
                                                                                                    
                                                             ?>

                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="Checking.php" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>ML</h3>
                                    <?php
                                                               
                                 $query = "SELECT COUNT(ML) AS ml_count 
                                             FROM leave_entitle 
                                            WHERE status=1";
                                            
                                        $query_run=db_one($query);
                                        echo  $query_run['ml_count'];
                                                                      
                               ?>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="Checking.php" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <!-- ./col -->
                        <div class="col-lg-2 col-xs-4">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>RH</h3>
                                    <?php
                                                               
                                 $query = "SELECT COUNT(RH) AS rh_count 
                                             FROM leave_entitle 
                                            WHERE status=1"; 
                                            
                                        $query_run=db_one($query);
                                        echo  $query_run['rh_count'];
                                                                      
                               ?>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="Checking.php" class="small-box-footer">More info <i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>

                    <div class="row" id="employee">
                        <!-- Left col -->
                        <div class="box-body">
                            <table class="table table-bordered table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>Emp Id</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Designation</th>
                                        <th>Gender</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                      $employee_query ="SELECT em.*,
                                               em.id AS pkey,
                                               dem.*,
                                               dm.*,
                                               gm.*
                                        FROM employee_master em
                                            INNER JOIN designation_master dem ON dem.id = em.design_id
                                            INNER JOIN department_master dm ON dm.id = em.dept_id
                                            INNER JOIN gender_master gm ON gm.id = em.gender
                                        WHERE 
                                            1=1
                                            AND em.design_id >1";
                      $employee_list = db_all($employee_query);
                      $employee_str = "";
                      $i = 1;
                      foreach( $employee_list AS $emp_row){
                          $employee_str .="<tr>
                            <td>".$i."</td>
                            <td>".$emp_row['emp_id']."</td>
                            <td>".$emp_row['name']."</td>
                            <td>".$emp_row['dept_name']."</td>
                            <td>".$emp_row['design_name']."</td>
                            <td>".$emp_row['gender_name']."</td>
                            <td>".$emp_row['created_at']."</td>
                            <td>
                            <div class='d flex-justify-content-center'>
                              <button class='btn btn-success'  data-toggle='modal' data-target='#approval_modal".$i."'>ENTITLE</button>
                              <button class='btn btn-primary'  data-toggle='modal' data-target='#decline_modal".$i."'>EDIT</button>
                              </div>

                              <div class='modal' id='approval_modal".$i."'>
                                <div class='modal-dialog'>
                                  <div class='modal-content'>
                                     <div class='modal-header'>
                                     <h1 class='modal-title'>LEAVES:</h1>
                                     <br>
                                     <br>
                                     <table class='table table-bordered table-responsive table-hover table-primary'>
                                        <thead>
                                            <tr>
                                                <th>Emp Id</th>
                                                <th>CL</th>
                                                <th>DL</th>
                                                <th>EL</th>
                                                <th>RH</th>
                                                <th>ML</th>
                                                <th>CL taken</th>
                                                <th>DL taken</th>
                                                <th>EL taken</th>
                                                <th>RH taken</th>
                                                <th>ML taken</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <tr>";

                                        $entitle_query = "SELECT * FROM leave_entitle WHERE emp_id=".$emp_row['pkey'];
                                        //echo $entitle_query;

                                        $entitle_details = db_one($entitle_query);

                                           $employee_str .="
                                            <td>".$emp_row['emp_id']."</td>
                                            <td>".$entitle_details['CL']."</td>
                                            <td>".$entitle_details['DL']."</td>
                                            <td>".$entitle_details['EL']."</td>
                                            <td>".$entitle_details['RH']."</td>
                                            <td>".$entitle_details['ML']."</td>
                                            <td>".$entitle_details['CL_t']."</td>
                                            <td>".$entitle_details['DL_t']."</td>
                                            <td>".$entitle_details['EL_t']."</td>
                                            <td>".$entitle_details['RH_t']."</td>
                                            <td>".$entitle_details['ML_t']."</td>
                                            <td>".$entitle_details['created_at']."</td>
                                        </tr>
                                        </tbody> 
                                     </table>
                                     </div>
                                    <div class='modal-body'>
                                    
                                    </div>
                                <div class='modal-footer'>
                                <button type='button' id='approval_btn' class='btn btn-warning'>Print</button>
                                <button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>
                         </div>
                    </div>
                    <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class='modal' id='decline_modal".$i."'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>

                    <h1 class='modal-title'>EDIT DETAILS:</h1>
                </div>
                <div class='modal-body'>";
                        
                $emp_query= "SELECT * FROM employee_master WHERE 1=1 AND id=".$emp_row['pkey'];
               // echo $emp_query;
                $emp_details = db_one($emp_query);

                    $employee_str .="<input type='hidden' class='emp_key' value='".$emp_row['id']."' />
                    <label>EMPLOYEE ID:</label>
                    <input type='text' name='empid' id='empid' class='form-control' disabled placeholder='Eg: CS001' value='".$emp_details['emp_id']."' />
                    <br>
                    <label>NAME:</label>
                    <input type='text' name='name' id='name' class='form-control' placeholder='Eg:John Doe'  value='".$emp_details['name']."'/>
                    <span class='glyphicon glyphicon-user form-control-feedback'></span>
                    <br>
                    <label>EMAIL ID:</label>
                    <input type='email' name='email' required id='emailid' class='form-control'
                        placeholder='john@gmail.com'  value='".$emp_details['email']."'/>
                    <span class='glyphicon glyphicon-envelope form-control-feedback'></span>
                    <br>
                    <label>CONTACT:</label>
                    <input type='phone' name='phone' id='phn' class='form-control' placeholder='Contact' maxlength='10'  value='".$emp_details['contact']."'/>
                    <span class='glyphicon glyphicon-phone form-control-feedback'></span>
                    <br>
                    <label>DEPARTMENT:</label>
                    <select class='form-control' name='department'>
                                <option value='1' ".($emp_details['dept_id'] == 1 ? 'selected' : '').">Computer Science
                                </option>
                                <option value='2' ".($emp_details['dept_id'] == 2 ? 'selected' : '').">Information Science
                                </option>
                                <option value='3' ".($emp_details['dept_id'] == 3 ? 'selected' : '').">Electrical
                                </option>
                                <option value='4' ".($emp_details['dept_id'] == 4 ? 'selected' : '').">Electrical and Electronics
                                </option>
                                <option value='5' ".($emp_details['dept_id'] == 5 ? 'selected' : '').">Mechanical
                                </option>
                                <option value='6'".($emp_details['dept_id'] == 6 ? 'selected' : '').">Civil
                                </option>
                                <option value='7' ".($emp_details['dept_id'] == 7 ? 'selected' : '').">Aeronautical
                                </option>
                            </select>
                    <br>
                    <label>Designation</label>
                        <select class='form-control' name='designation'>
                            <option value='0' disabled>Choose a Field
                            <option>
                            <option value='1'".($emp_details['design_id'] == 1 ? 'selected' : '').">Principal
                            <option>
                                <optgroup label='Dean'>
                                    <option value='4'".($emp_details['design_id'] == 4 ? 'selected' : '').">DEAN:Administration
                                    <option>
                                    <option value='5'".($emp_details['design_id'] == 5 ? 'selected' : '').">DEAN:Infrastructure
                                    <option>
                                    <option value='6'".($emp_details['design_id'] == 6 ? 'selected' : '').">DEAN:Research and Development
                                    <option>
                                </optgroup>
                                <optgroup label='Hod'>
                                    <option value='7'".($emp_details['design_id'] == 7 ? 'selected' : '').">HOD:Computer Science Department
                                    <option>
                                    <option value='8' ".($emp_details['design_id'] == 8 ? 'selected' : '').">HOD:Information Science Department
                                    <option>
                                    <option value='9'".($emp_details['design_id'] == 9 ? 'selected' : '').">HOD:Electrical Department
                                    <option>
                                    <option value='10' ".($emp_details['design_id'] == 10 ? 'selected' : '').">HOD:Electrical Department
                                    <option>
                                    <option value='11'".($emp_details['design_id'] == 11 ? 'selected' : '').">HOD:Mechanical Department
                                    <option>
                                    <option value='12'".($emp_details['design_id'] == 12 ? 'selected' : '').">HOD:Civil Department
                                    <option>
                                    <option value='13' ".($emp_details['design_id'] == 13 ? 'selected' : '').">HOD:Aeronautical Department
                                    <option>
                                </optgroup>
                                <optgroup label='Teaching Staff'>
                                    <option value='14'".($emp_details['design_id'] == 14 ? 'selected' : '').">Professor
                                    <option>
                                    <option value='15'".($emp_details['design_id'] == 15 ? 'selected' : '').">Assistant Professor
                                    <option>
                                    <option value='16' ".($emp_details['design_id'] == 16 ? 'selected' : '').">Associate Professor
                                    <option>
                                </optgroup>
                                <optgroup label='Non Teaching Staff'>
                                    <option value='17'".($emp_details['design_id'] == 17 ? 'selected' : '').">Lab Instructor
                                    <option>
                                    <option value='18'".($emp_details['design_id'] == 18 ? 'selected' : '').">Clerk
                                    <option>
                                    <option value='19'".($emp_details['design_id'] == 19 ? 'selected' : '').">Placement Officer
                                    <option>
                                    <option value='20'".($emp_details['design_id'] == 20 ? 'selected' : '').">Librarian
                                    <option>
                                </optgroup>
                        </select>
                    <br>
                    <label>GENDER:</label>
                    <select class='form-control' name='gender'>
                        <option value='0' disabled>Choose a Field</option>
                        <option value='1' ".($emp_details['gender'] == 1 ? 'selected' : '')." >Male</option>
                        <option value='2' ".($emp_details['gender'] == 2 ? 'selected' : '').">Female</option>
                    </select>
                    <br>
                    <br>
                    <h3> Are you sure You want to update? <b>".$emp_row['name']."</b>'s data</h3>

                </div>
                <div class='modal-footer'>
                    <button type='button' id='decline_btn' class='btn btn-success'><i class='fa fa-check'></i>update</button>
                    <button type='button' class='btn btn-danger' data-dismiss='modal'><i
                            class='fa fa-close'></i>close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    </td>

    </tr>";
    $i++;
    }

    echo $employee_str;
    ?>
    </tbody>
    </table>
    </div>
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
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="plugins/fullcalendar/fullcalendar.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script><!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

    <!-- date time clock -->
    <script src="plugins/date_time/date_time.js"></script>

    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--script src="dist/js/pages/dashboard2.js"></script-->


    <!--Bar chart data ends-->

    <!-- ChartJS 1.0.1 -->
    <script src="plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="bootstrap/js/counter.js"></script>
</body>
<script>
$(document).ready(function() {
    //For approval of NEW EMployees registered

    $(document).on('click', '#approval_btn', function() {
        //alert('Cliked');
        var p_key = $(this).parent().prev().find('.emp_key').val();

        //alert(p_key);
        $.post('update_employee_status.php', {
                data: p_key
            },
            function(data, status) {
                //alert(data);
                $('.modal-body').html(data);
                setTimeout(function() {
                    window.location.reload();
                }, 3000);

            });
    });
    $(document).on('click', '#decline_btn', function() {
        //alert('Cliked');
        var p_key = $(this).parent().prev().find('.emp_key').val();

        //alert(p_key);
        $.post('updateEmployeedata.php', {
                data: p_key
            },
            function(data, status) {
                //alert(data);
                $('.modal-body').html(data);
                setTimeout(function() {
                    window.location.reload();
                }, 3000);

            });
    });
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>


</html>