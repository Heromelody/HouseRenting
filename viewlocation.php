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


 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registered Locations</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Locations Master</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">


            <?php 

            require 'functions/config.php';

            $sql = "SELECT * FROM location";
            $result = $conn->query($sql);

            if($result->num_rows > 0){

              echo "<table id='example1' class='table table-bordered table-striped'>";
              echo "<thead><tr> <th>City Number</th>
              <th>Longitude</th>
              <th>Latitude</th>
              <th>Action</th>
             
            </tr>
            </thead><tbody>";

            while($row = $result->fetch_assoc()){

           
            echo "<tr><td>".$row["city_name"]."</td>
              <td>".$row["longitude"]."
              </td>
              <td>".$row["latitude"]."</td>
              <td><button class='btn btn-primary'>View</button></td>
            
            </tr>
           
            </tfoot>
          ";

        }

        echo "</table>";

             

            }
            
            
            
            
            ?>

            
               
                 
                
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include('include/footer.php'); ?>