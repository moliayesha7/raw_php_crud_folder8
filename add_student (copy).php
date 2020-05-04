<?php require_once "templates/header.php" ;?>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php 
                  if(isset($_GET['submit'])){
                        $name=$_GET['name'];
                        $id=$_GET['id'];
                        $address=$_GET['address'];
                        $batch=$_GET['batch'];
                        $cell =$_GET['cell'];
                        $description=$_GET['description'];

                         $ppic_name =$_FILES['image']['name'];
                        $ppic_tmp=$_FILES['image']['tmp_name'];

              
                        $pic_ext_array =  explode('.', $ppic_name);
              
                        $ext = end($pic_ext_array);
              
                      echo  $u_pic_name = md5(time().rand().$ppic_name).'.'. strtolower(  $ext );
                  }


                  ?>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="<?php if(isset($_GET['name'])){
                                  echo $_GET['name'];
                                  }?>" >
                        </div>
                        <div class="form-group">
                            <label for="image">Student Id</label>
                            <input type="text" name="id" class="form-control"
                            value="<?php if(isset($_GET['id'])){
                                  echo $_GET['id'];
                                  }?>"   >
                        </div>
                        <div class="form-group">
                            <label for="image">Address</label>
                            <input type="text" name="address" class="form-control" value="<?php if(isset($_GET['address'])){
                                  echo $_GET['address'];
                                  }?>">
                        </div>
                        <div class="form-group">
                            <label for="image">Batch No</label>
                            <input type="text" name="batch" class="form-control" value="<?php if(isset($_GET['batch'])){
                                  echo $_GET['batch'];
                                  }?>" >
                        </div>
                        <div class="form-group">
                            <label for="image">Cell</label>
                            <input type="text" name="cell" class="form-control" value="<?php if(isset($_GET['cell'])){
                                  echo $_GET['cell'];
                                  }?>" >
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
                            <button name="submit" class="form-control btn btn-success">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "templates/footer.php"; ?>