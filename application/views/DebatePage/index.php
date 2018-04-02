<?php
$this->load->view('Partials/stylesheets');	
?>

<body data-spy="scroll" data-target="#primary-menu">

    
    
    <?php
        $this->load->view('Partials/navbar');	
    ?>

    <?php
        $data['heading'] = "Some Debate Topic";
        $data['description'] = "Some Debate Topic Some Debate Topic Some Debate Topic Some Debate Topic ";
        
        $this->load->view('DebatePage/header',$data);	
    ?>

    <?php
        $this->load->view('DebatePage/Tabs');	
    ?>

    <?php
        $this->load->view('DebatePage/Result');	
    ?>

    <?php
        $this->load->view('Partials/Footer');	
    ?>

<?php
    $this->load->view('Partials/scripts');	
?>

</body>

</html>
