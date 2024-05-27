<?php include('include/header.php'); ?>

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
            <h1>sign contract</h1>
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
                <h3 class="card-title">contract Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">

                <div class="row">

                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">landlord</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter landlord  Name">
                  </div>

                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">Tenant</label>
                    <input type="name" class="form-control" id="description" placeholder="Enter Tenant Number">
                  </div>

</div>



                </div>

                <div class="row">

                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Start date</label>
                    <input type="name" class="form-control" id="name" placeholder="Enter Start date  Name">
                  </div>

                </div>

                <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputPassword1">End date</label>
                    <input type="name" class="form-control" id="description" placeholder="Enter End Number">
                  </div>

</div>



                </div>

            

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">keep contract</button>
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