<?php
$this->load->view('Partials/stylesheets');
?>

<body data-spy="scroll" data-target="#primary-menu">



    <?php
        $this->load->view('Partials/navbar');
    ?>

    <?php
        $data['heading'] = $debate['Title'];
        $data['description'] = $debate['Description'];;

        $this->load->view('DebatePage/header',$data);
    ?>

    <?php
        $data['comments'] = $comments;
        $data['ID'] = $debate['ID'];
        $this->load->view('DebatePage/Tabs',$data);
    ?>

    <?php
        $data['Result'] = $debate['Result'];
        $this->load->view('DebatePage/Result',$data);
    ?>

    <?php
        $this->load->view('Partials/Footer');
    ?>

<?php
    $this->load->view('Partials/scripts');
?>

</body>

</html>
