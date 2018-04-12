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
                  <th>Heading</th>
                  <th>Description</th>
                  <th>Lat</th>
                  <th>Lan</th>
                  <th>User Id </th>
                  <th>Created At</th>
                  
                </tr>
              </thead>

              <tbody>
                <?php
                  foreach ($ideas as $idea) {
                ?>
                <tr>
                  <td><?php echo $idea['ID']; ?></td>
                  <td><?php echo $idea['Heading']; ?></td>
                  <td><?php echo $idea['Description']; ?></td>
                  <td><?php echo $idea['Lat']; ?></td>
                  <td><?php echo $idea['Lan']; ?></td>
                  <td><?php echo $idea['UserId']; ?></td>
                  <td><?php echo $idea['CreatedAt']; ?></td>
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
