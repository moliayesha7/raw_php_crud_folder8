<?php
   
    require_once "libs/config.php";
    require_once "libs/functions.php";
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

    $name=$_POST['name'];

  //user name manage
    $username=$_POST['username'];
    $username_check=userNameCheck($username,$conn);


    //email management
    $email=$_POST['email'];
    $email_check=emailCheck($email,$conn);


 $cell=$_POST['cell'];

  //password management
  $pass=$_POST['pass'];
  $hass_pass=password_hash($pass,PASSWORD_DEFAULT);

 

  $pic=$_FILES['pic']['name'];
  $tem_pic=$_FILES['pic']['tmp_name'];

 // for unique name
 $uname=time().rand(). $pic;
    
 // convert string to array
 $ext_array=explode('.', $pic);

 // pic er last e .jpg add kora
 $ext=end($ext_array);
 // encrypt kore last e jpg add
 $encname=md5($uname).'.'.$ext;

 


 if(empty($name)|| empty($username)|| empty($email)||empty($pass)||empty($cell)||empty($pic) ){
    $mess= "<p class='alert alert-danger w-50 mx-auto'>All Field are required <botton class='close' data-dismiss='alert'>&times;</button></p>";
 }else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
    $mess= "<p class='alert alert-danger w-50 mx-auto'>Invalid E-mail Address <botton class='close' data-dismiss='alert'>&times;</button></p>";
 }else if(in_array($ext,['jpg','png','gif','jpeg'])==false){
    move_uploaded_file($tem_pic,'photos/'.$encname);
 }else if($username_check == false){

    $mess= "<p class='alert alert-danger w-50 mx-auto'>User name Already exits <botton class='close' data-dismiss='alert'>&times;</button></p>";

 }else if($email_check == false){

    $mess= "<p class='alert alert-danger w-50 mx-auto'>Email Already exits <botton class='close' data-dismiss='alert'>&times;</button></p>";
    
 }else{
    $sql="INSERT INTO users(fname,uname,email,cell,pass,photo,status) VALUES ('$name','$username','$email','$cell','$hass_pass','$encname','Active')";
    $conn->query($sql);
    $mess="<p class='alert alert-success w-50 mx-auto'>Registration Successful</p>";
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



    <div class="login reg">
        <div class="card">
            <div class="card-body">

                <h2>Create An Account</h2>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Cell</label>
                        <input type="text" name="cell" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="pass" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Profile Picture</label>
                        <input name="pic" type="file" name="picture" class="">
                    </div>
                    <div class="form-group">

                        <input type="submit" name="submit" value="Sign Up" class="btn btn-block btn-success">
                    </div>
                </form>
                <p><a href="index.php">Already Have an Account?login Now!</a></p>
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