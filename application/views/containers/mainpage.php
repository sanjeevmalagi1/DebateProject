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


    <!--Feature-area-->
    <section class="gray-bg section-padding" id="service-page">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h1>Ideas Hub</h1>
                </div>
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="box">
                        
                        <h4>Idea #1</h4>
                        <p>Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod tepo raraincididunt ugt labore.</p>
                    </div>
                </div>
                
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
