<?php 
  session_start();
 // echo "hello";

  if(isset($_POST['submit'])){

    
 }
                                 
 include('dbconnection.php');
 include('pages/required/functions.php');


?>

<!doctype html>
<html lang="en">
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
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="row" id="employee">
                        <!-- Left col -->
                        <div class="box-body">
                            <table class="text-center table table-bordered table-responsive table-hover">
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
                      $employee_query ="SELECT * FROM employee_master,department_master,designation_master,gender_master WHERE design_id>1";
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
                                     </div>
                                    <div class='modal-body'>
                                     <h3> Are you sure ? You want to approve <b>".$emp_row['name']."</b></h3>
                                     <input type='hidden' class='emp_key' value='".$emp_row['id']."' /> 
                                    </div>
                                <div class='modal-footer'>
                            <button type='button' class='btn btn-default pull-left' data-dismiss='modal'>Close</button>
                            <button type='button' id='approval_btn' class='btn btn-primary'>Approve</button>
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
                <div class='modal-body'>
                    <input type='hidden' class='emp_key' value='".$emp_row['id']."' />
                    <label>EMPLOYEE ID:</label>
                    <input type='text' name='empid' id='empid' class='form-control' placeholder='Eg: CS001' />
                    <br>
                    <label>NAME:</label>
                    <input type='text' name='name' id='name' class='form-control' placeholder='Eg:John Doe'>
                    <span class='glyphicon glyphicon-user form-control-feedback'></span>
                    <br>
                    <label>EMAIL ID:</label>
                    <input type='email' name='email' required id='emailid' class='form-control'
                        placeholder='john@gmail.com'>
                    <span class='glyphicon glyphicon-envelope form-control-feedback'></span>
                    <br>
                    <label>CONTACT:</label>
                    <input type='phone' name='phone' id='phn' class='form-control' placeholder='Contact' maxlength='10'>
                    <span class='glyphicon glyphicon-phone form-control-feedback'></span>
                    <br>
                    <label>DEPARTMENT ID:</label>
                    <input type='number' name='dept_id' required id='dept_id' class='form-control' placeholder='Eg:1' />
                    <span class='glyphicon glyphicon-envelope form-control-feedback'></span>
                    <br>
                    <label>DESIGNATION ID:</label>
                    <input type='number' name='design_id' required id='design_id' class='form-control'
                        placeholder='Eg:1' />
                    <span class='glyphicon glyphicon-envelope form-control-feedback'></span>
                    <br>
                    <label>GENDER:</label>
                    <select class='form-control' name='gender'>
                        <option value='0' disabled>Choose a Field</option>
                        <option value='1'>Male</option>
                        <option value='2'>Female</option>
                    </select>
                    <br>
                    <label>STATUS:</label>
                    <select class='form-control' name='status'>
                        <option value='0'>ex employee</option>
                        <option value='1'>approve</option>
                        <option value='-1'>pending</option>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>