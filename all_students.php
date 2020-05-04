<?php require_once "templates/header.php" ;?>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Students</div>
                <a class="btn btn-success btn-sm" href="add_student.php">Add</a>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <th>SL</th>
                            <th>Name </th>
                            <th>Student Id</th>
                            <th>Address</th>
                            <th>Cell</th>
                            <th>Batch</th>
                            <th>Photo</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete </th>
                        </thead>
                        <tbody>
                           <?php

                        $sql="SELECT * FROM students_info";
                        $data=$conn -> query($sql);
                        $i=1;
                        while( $single_data = $data -> fetch_assoc()):


                           ?>

                            <tr>
                            <td><?php echo $i ; $i++;  ?></td>
                            <td><?php echo $single_data['s_name'];?></td>
                                <td><?php echo $single_data['student_id'];?></td>
                               
                                <td><?php echo $single_data['address'];?></td>
                                <td><?php echo $single_data['cell'];?></td>
                                <td><?php echo $single_data['batch_no'];?></td>
                                <td><img src="stu_photos/<?php echo $single_data['image']; ?>" alt=""></td>

                        <?php endwhile;?>
                                <td>
                                    <a class="btn btn-success btn-sm">View</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form method="post">
                                       
                                        <button class="btn btn-xs btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "templates/footer.php"; ?>