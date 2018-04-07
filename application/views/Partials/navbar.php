<div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
<div class="mainmenu-area" data-spy="affix" data-offset-top="00">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary-menu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand logo">
                    <h2>LOGO</h2>
                </a>
            </div>
            <!--Logo/-->
            <nav class="collapse navbar-collapse" id="primary-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/Debates">Debates</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/home/helpbox">Help Box</a></li>
                    <li><a href="<?php echo base_url(); ?>index.php/home/IdeasHub">Ideas Hub</a></li>
                    <?php
                      if($this->session->UserName){
                    ?>
                      <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->UserName; ?>
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu" style="margin-top:-30px; z-index: 2;">
                          <li><a href="<?php echo base_url() ?>index.php/Auth/logout">Logout</a></li>
                        </ul>
                      </li>
                      <!-- <li><a href="<?php echo base_url(); ?>index.php/Auth/login"></a></li> -->
                    <?php
                      }
                      else{
                    ?>
                      <li><a href="<?php echo base_url(); ?>index.php/Auth/login">Login / Signup</a></li>
                    <?php
                    }
                    ?>

                </ul>
            </nav>
        </div>
    </div>
