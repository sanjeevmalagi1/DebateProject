<?php
$this->load->view('Partials/stylesheets');	
?>

<body data-spy="scroll" data-target="#primary-menu">

    <div class="preloader">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
    
    <?php
        $this->load->view('Partials/navbar');	
    ?>

    <?php
        $this->load->view('Partials/header');	
    ?>


<section class="gray-bg section-padding" id="feature-page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
                    <div class="page-title">
                        <h2>Welcome to Project Name</h2>
                        <p>A short description of project</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href="<?php echo base_url(); ?>index.php/Debates" class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo base_url(); ?>images/portfolio-icon-1.png" alt="">
                        </div>
                        <h3>Debate</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
                    </div>
                </a>
                <a href="<?php echo base_url(); ?>index.php/IdeasHub" class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo base_url(); ?>images/portfolio-icon-2.png" alt="">
                        </div>
                        <h3>Ideas Hub</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
                    </div>
                </a>
                <a href="<?php echo base_url(); ?>index.php/HelpBox" class="col-xs-12 col-sm-6 col-md-4">
                    <div class="box">
                        <div class="box-icon">
                            <img src="<?php echo base_url(); ?>images/portfolio-icon-3.png" alt="">
                        </div>
                        <h3>Help Box</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quas nulla est adipisci,</p>
                    </div>
                </a>
            </div>
        </div>
    </section>


    <?php
        $this->load->view('Partials/Footer');
    ?>



<?php
    $this->load->view('Partials/scripts');	
?>

</body>

</html>
