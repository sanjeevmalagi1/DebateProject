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
            <i class="fa fa-table"></i> Add Debate
          </span>
          <span class="pull-right">
            <button class="btn btn-primary"><i class="fa fa-ross"></i> Manage Debates</button>
          </span>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url(); ?>index.php/Admin/AddDebate" method="post">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <label for="titel">Title</label>
                  <input name="title" required class="form-control" id="titel" type="text" aria-describedby="nameHelp" placeholder="Enter title of Debate">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <textarea name="description" required id="Description" rows="6" class="form-control"  placeholder="A brief description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block" >Add Debate</button>
          </form>
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
