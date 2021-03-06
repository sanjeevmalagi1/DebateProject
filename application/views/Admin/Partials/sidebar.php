<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="index.html">Projet Admin</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/Admin/">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Dashboard</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-sitemap"></i>
          <span class="nav-link-text">Debates</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseMulti">
          <li>
            <a href="<?php echo base_url() ?>index.php/Admin/ManageDebates/">Manage Debates</a>
          </li>
          <li>
            <a href="<?php echo base_url() ?>index.php/Admin/AddDebate/">Add Debate</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/Admin/HelpBoxList/">
          <i class="fa fa-fw fa-area-chart"></i>
          <span class="nav-link-text">Help Box Submission</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
        <a class="nav-link" href="<?php echo base_url() ?>index.php/Admin/IdeasList/">
          <i class="fa fa-fw fa-table"></i>
          <span class="nav-link-text">Ideas Submissions</span>
        </a>
      </li>
      
    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>

    <?php
      $this->load->view('Admin/Partials/header');
    ?>
  </div>
</nav>
