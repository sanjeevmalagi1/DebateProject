<?php
$this->load->view('Partials/stylesheets');	
?>

<body data-spy="scroll" data-target="#primary-menu">

    <?php
        $this->load->view('Partials/navbar');	
    ?>
    
    <?php
        $this->load->view('Partials/LoginPage/LoginForm');	
    ?>

    <?php
        $this->load->view('Partials/Footer');	
    ?>

<?php
    $this->load->view('Partials/scripts');	
?>

</body>

</html>
