<?php 

session_start(); //start session

include('include/header.php'); 

?>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

 <?php 


//check if user is authenticated
if(!isset($_SESSION['email'])){
  header("Location: login.php");
  exit;
  
}
 
 include('include/navbar.php'); ?>

 <?php include('include/sidebar.php'); ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create New Property</h1>
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
                <h3 class="card-title">Property  Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="functions/registerHouse.php">
                <div class="card-body">

                <div class="row">

               

                <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputPassword1">House Number.</label>
                    <input type="name" class="form-control" id="house_number" name="house_number" placeholder="Enter House Number">
                  </div>
                </div>

                <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Select Location</label>
                   <select class="form-control" name="location_id" id="location_id">
                       <option value="Tabata">Tabata</option>
                       <option value="Ubungo">Ubongo</option>
                       <option value="Kinondoni">Kinondoni</option>
                       <option value="Temeke">Temeke</option>
                       <option value="Kigamboni">Kigamboni</option>
                       <option value="Kinondoni">Kinondoni</option>

                   </select>
                  </div>

                </div>
               

                <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputPassword1">Select Landlords</label>
                    <select class="form-control" name="landlord_id" id="landlord_id">
                       <option value="Happiness Lissa">Happiness Lissa</option>
                       <option value="George Japhet">George Japhet</option>
                       <option value="Jerry Tom">Jerry Tom</option>

                   </select>
                  </div>

                </div>

                
               
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" id="regBtn" name="regBtn">Submit</button>
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