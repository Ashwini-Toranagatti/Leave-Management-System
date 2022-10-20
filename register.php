
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LMS | registerpage</title>
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
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <style>
  body  {
  background-image: url("https://images.unsplash.com/photo-1613375920388-f1f70f341f8a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80");
  background-size: cover;
  background-position:center;
  height:100vh;
  display:flex;
}
    </style>
</head>

<body class="hold-transition login-page" style=" background-image: url('https://images.unsplash.com/photo-1613375920388-f1f70f341f8a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')";>
    <div class="login-box">
        <div class="login-logo">
            <a href="login_authenticate.php"><h1 style="color:white";>REGISTERATION PAGE</h1></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Please fill the appropriate details</p>

            <form action="insert.php" method="post">
                <div class="form-group has-feedback">
                    <label>Employee Id</label>
                    <input type="id" name="emp" id="empid" class="form-control" placeholder="Eg:e001">
                    <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Eg:john Doe">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Username</label>
                    <input type="text" name="username" id="user" class="form-control" placeholder="Eg:john@gmail.com">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Password</label>
                    <input type="password" name="pass" required id="pswd" class="form-control"
                        placeholder="atleast fill 8characters" maxlength="20">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Email Id</label>
                    <input type="email" name="email" required id="emailid" class="form-control" placeholder="Eg:john@gmail.com">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <label>Contact No.</label>
                    <input type="phone" name="phone" id="phn" class="form-control" placeholder="Contact" maxlength="10">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <div class="m-4">

                        <Select class="form-control" name="gender" id="gen">
                            <option value="">choose the field
                            <option>
                            <option value="male">Male
                            <option>
                            <option value="female">Female
                            <option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Designation</label>

                        <Select class="form-control" name="designation" id="design">

                            <option value="c">Choose the field
</option>
                            <option value="p">Principal
</option>
                                <optgroup label="Dean">
                                    <option value="Administrator">Administrator
                                    <option>

                                    <option value="Infrastructure">Infrastructure
                                    <option>
                                    <option value="Research and Development">Research and Development
                                    <option>
                                </optgroup>
                                <optgroup label="Hod">
                                    <option value="Computer Science Department">Computer Science Department
                                    <option>
                                    <option value="Information Science Department">Information Science Department
                                    <option>
                                    <option value="Electrical Department">Electrical Department
                                    <option>
                                    <option value="Electrical Department">Electrical Department
                                    <option>
                                    <option value="Mechanical Department">Mechanical Department
                                    <option>
                                    <option value="Civil Department">Civil Department
                                    <option>
                                    <option value="Aeronautical Department">Aeronautical Department
                                    <option>
                                </optgroup>
                                <optgroup label="Teaching Staff">
                                    <option value="Professor">Professor
                                    <option>
                                    <option value="Assistant Professor">Assistant Professor
                                    <option>
                                    <option value="Associate Professor">Associate Professor
                                    <option>
                                </optgroup>
                                <optgroup label="Non Teaching Staff">
                                    <option value="Lab Instructor">Lab Instructor
                                    <option>
                                    <option value="Clerk">Clerk
                                    <option>
                                    <option value="Placement Officer">Placement Officer
                                    <option>
                                    <option value="Librarian">Librarian
                                    <option>

                                </optgroup>


                        </select>
                    </div>


                    <div class="form-group">
                        <label>Department</label>
                        <div class="m-4">

                            <Select class="form-control" name="department" id="dept">
                                <option value="field">Choose the field
                                <option>
                                <option value="Computer Science">Computer Science
                                <option>

                                <option value="Information Science">Information Science
                                <option>

                                <option value="Electrical">Electrical
                                <option>
                                <option value="Electrical and Electronics">Electrical and Electronics
                                <option>
                                <option value="Mechanical">Mechanical
                                <option>
                                <option value="Civil">Civil
                                <option>
                                <option value="Aeronautical">Aeronautical
                                <option>





                            </select>
                        </div>
                        <br>
                        <div class="form-group has-feedback">
                            <label>Address</label>
                            <textarea type="text" name="address" id="Add" form="usrform" rows="4" col="45" class="form-control" placeholder="Enter the address"></textarea>
                        </div>
                        <div class="row">

                            <!--div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div-->
                            <!-- /.col -->
                            <div class="col-xs-4">
                                <button type="submit" name="submit" value="submit"
                                    class="btn btn-primary btn-block btn-flat">Submit
                                </button>
                            </div>
                            <!-- /.col -->
                        </div>
            </form>

            <!--div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div-->
            <!-- /.social-auth-links -->



        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>

</body>

</html>