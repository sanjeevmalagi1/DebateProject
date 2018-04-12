<!DOCTYPE html>
<html lang="en">

<?php
  $this->load->view('Admin/Partials/stylesheets');
?>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <?php
    $this->load->view('Admin/Partials/sidebar');
  ?>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <span>
            <i class="fa fa-table"></i> Submissions
          </span>
          
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Full Name</th>
                  <th>Father's Name</th>
                  <th>Gender</th>
                  <th>Address</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Date Of Birth</th>
                  <th>Occupation</th>
                  <th>Caste</th>
                  <th>Card Type</th>
                  <th>Have VodeID</th>
                  <th>Voted</th>
                </tr>
              </thead>

              <tbody>
                <?php
                  foreach ($submissions as $submission) {
                ?>
                <tr>
                  <td><?php echo $submission['ID']; ?></td>
                  <td><?php echo $submission['fullName']; ?></td>
                  <td><?php echo $submission['fathersName']; ?></td>
                  <td><?php echo $submission['gender']; ?></td>
                  <td><?php echo $submission['address']; ?></td>
                  <td><?php echo $submission['mobile']; ?></td>
                  <td><?php echo $submission['email']; ?></td>
                  <td><?php echo $submission['DOB']; ?></td>
                  <td><?php echo $submission['occupation']; ?></td>
                  <td><?php echo $submission['caste']; ?></td>
                  <td><?php echo $submission['cardType']; ?></td>
                  <td><?php echo $submission['voterId']; ?></td>
                  <td><?php echo $submission['voted']; ?></td>
                </tr>
                <?php
                  }
                 ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <?php
      $this->load->view('Admin/Partials/footer');
    ?>
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <?php
      $this->load->view('Admin/Partials/scripts');
    ?>
  </div>
</body>

</html>
