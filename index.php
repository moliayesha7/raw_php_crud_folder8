<?php
   
    require_once "libs/config.php";
    require_once "libs/functions.php";

    if( isset( $_SESSION['fname']) || isset( $_SESSION['uname'])|| isset( $_SESSION['email']) ){
        header('location:dashboard.php');
      }
  
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/justdo/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 13:45:16 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>JustDo Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
    <?php 

        if(isset($_POST['submit'])){

        $name=$_POST['name_or_email'];
         $pass=$_POST['pass'];

        if(empty($name) || empty($pass)){
            $mess= "<p class='alert alert-danger w-50 mx-auto'>Field must not be empty <botton class='close' data-dismiss='alert'>&times;</button></p>";
        }else{

            $sql="SELECT * from users WHERE uname='$name' OR email='$name' ";
           $data= $conn -> query($sql);

           $num=$data -> num_rows;

           echo $num;
           if($num== 1){

            $user_login_data=$data -> fetch_assoc();

            if(password_verify( $pass,$user_login_data['pass'] )== false){

            $mess= "<p class='alert alert-danger w-50 mx-auto'>Wrong Password ! <botton class='close' data-dismiss='alert'>&times;</button></p>";
            }else{

                $_SESSION['pic']=$user_login_data['photo'];
                $_SESSION['fname']=$user_login_data['fname'];
                $_SESSION['uname']=$user_login_data['uname'];
                $_SESSION['email']=$user_login_data['email'];
                $_SESSION['cell']=$user_login_data['cell'];
                header('location:dashboard.php');
            }


           }else{

            $mess= "<p class='alert alert-danger w-50 mx-auto'>Wrong Username or E-mail ! <botton class='close' data-dismiss='alert'>&times;</button></p>";
           }

        }
        }

    ?>


    <div class="mess">
        <?php 
        if(isset($mess)){
            echo $mess;
        }
        ?>
    </div>



    <div class="login">
        <div class="card">
            <div class="card-body">

                <h2>Login Now</h2>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <div class="form-group">
                        <label for="">Username/Email</label>
                        <input type="text" name="name_or_email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="pass" class="form-control">
                    </div>
                    <div class="form-group">

                        <input type="submit" name="submit" value="Log In" class="btn btn-block btn-success">
                    </div>
                </form>
                <p><a href="reg.php">Create an Account</a></p>
            </div>

        </div>


    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.urbanui.com/justdo/template/demo/vertical-default-light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Oct 2019 13:45:55 GMT -->

</html>