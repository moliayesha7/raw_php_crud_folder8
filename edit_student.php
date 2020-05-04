<?php require_once "templates/header.php" ;?>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                              <label for="image">Student Id</label>
                              <input type="text" name="student_id" class="form-control" value="{{ old('student_id') }}">
                        </div>
                        <div class="form-group">
                              <label for="image">Address</label>
                              <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                        </div>
                        <div class="form-group">
                              <label for="image">Batch No</label>
                              <input type="text" name="batch" class="form-control" value="{{ old('batch') }}">
                        </div>
                        <div class="form-group">
                              <label for="image">Cell</label>
                              <input type="text" name="cell" class="form-control" value="{{ old('cell') }}">
                        </div>
                       
                        <div class="form-group">
                              <label for="image">Image</label>
                              <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                              <label for="description">Description</label>
                              <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                              <button class="form-control btn btn-success">Save Product</button>
                        </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "templates/footer.php"; ?>