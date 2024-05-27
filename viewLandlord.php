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
            <h1>Registered Landlords</h1>
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
              <h3 class="card-title">Landlords Master List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">


            <?php 

            require 'functions/config.php';

            $sql = "SELECT * FROM landlord";
            $result = $conn->query($sql);

            if($result->num_rows > 0){

              echo "<table id='example1' class='table table-bordered table-striped'>";
              echo "<thead><tr> <th>Full Name</th>
              <th>Mobile Number</th>
             
              <th>Action</th>
             
            </tr>
            </thead><tbody>";

            while($row = $result->fetch_assoc()){

           
            echo "<tr><td>".$row["name"]."</td>
              <td>+255".$row["mobile"]."
              </td>
            
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