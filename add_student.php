<?php require_once "templates/header.php" ;?>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php 
                  if(isset($_POST['submit'])){
                        $name=$_POST['name'];
                        $id=$_POST['id'];
                        $address=$_POST['address'];
                        $batch=$_POST['batch'];
                        $cell =$_POST['cell'];
                        $description=$_POST['description'];

                         $ppic_name =$_FILES['image']['name'];
                        $ppic_tmp=$_FILES['image']['tmp_name'];

              
                        $pic_ext_array =  explode('.', $ppic_name);
              
                        $ext = end($pic_ext_array);
              
                        $u_pic_name = md5(time().rand().$ppic_name).'.'. strtolower(  $ext );


                      if(empty($name)|| empty($id)|| empty($address)||empty($batch)||empty($cell)||empty($description)||empty($ppic_name)  ){
                        $mess= "<p class='alert alert-danger w-50 mx-auto'>All Field are required <botton class='close' data-dismiss='alert'>&times;</button></p>";
                     }else{
                        $sql="INSERT INTO students_info(s_name,id,batch_no,cell,address,image,description,status) VALUES ('$name','$id','$batch','$cell','$address','$u_pic_name','$description','Active')";
                        $conn->query($sql);
                        move_uploaded_file( $ppic_tmp, 'stu_photos/'.$u_pic_name );
                         $mess="<p class='alert alert-success w-50 mx-auto'>Student Added Successful</p>";
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

                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Student Id</label>
                            <input type="text" name="id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Batch No</label>
                            <input type="text" name="batch" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Cell</label>
                            <input type="text" name="cell" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" cols="30" rows="10"
                                class="form-control"></textarea>
                        </div>


                        <div class="form-group">

                            <input type="submit" name="submit" value="Sign Up" class="btn form-control btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "templates/footer.php"; ?>