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
            <i class="fa fa-table"></i> Manage Debates
          </span>
          <span class="pull-right">
            <button class="btn btn-primary"><i class="fa fa-plus"></i> Add Debate</button>
          </span>

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Result</th>
                  <th>Start date</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                <?php
                  foreach ($debates as $debate) {
                ?>
                <tr>
                  <td><?php echo $debate['ID']; ?></td>
                  <td><?php echo $debate['Title']; ?></td>
                  <td><?php echo $debate['Description']; ?></td>
                  <td><?php echo $debate['Result']; ?></td>
                  <td><?php echo $debate['CreatedAt']; ?></td>
                  <td>
                    <a href="<?php echo base_url(); ?>index.php/Admin/EditDebate/<?php echo $debate['ID']; ?>" class="btn btn-primary">
                      Edit
                    </a>
                  </td>
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
