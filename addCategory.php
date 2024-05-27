<?php 

session_start(); //start session

//check if user is authenticated
if(!isset($_SESSION['email'])){
  header("Location: login.php");
  exit;
  
}

include('include/header.php'); ?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

 <?php include('include/navbar.php'); ?>

 <?php include('include/sidebar.php'); ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create New  Category</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Category Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="functions/registerCategory.php">
                <div class="card-body">

                <div class="row">

                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Category Name">
                  </div>

                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Description">
                  </div>

</div>

                </div>

                 

                
               
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <?php include('include/footer.php'); ?>