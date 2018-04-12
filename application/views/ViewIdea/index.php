<?php
$this->load->view('Partials/stylesheets');
?>

<body data-spy="scroll" data-target="#primary-menu">

    <?php
    $this->load->view('Partials/navbar');
    ?>

    <?php
        $this->load->view('ViewIdea/header',$idea);
    ?>

    <?php
        $data['idea'] = $idea;
        $data['solutions'] = $solutions;
        $this->load->view('ViewIdea/IdeaDetails',$data);
    ?>

    <?php
        $this->load->view('Partials/Footer');
    ?>

<?php
    $this->load->view('Partials/scripts');
?>

</body>

</html>
