<section id="solutions" class="gray-bg section-padding" id="service-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
            <div class="item row">
                <div class="v-center">
                        <div class="col-xs-12 col-md-9 row">
                            <?php
                            $this->load->view('Partials/ViewIdea/SolutionForm');
                            ?>
                            <?php
                                foreach ($solutions as $solution) {
                                    $this->load->view('Partials/ViewIdea/Solution',$solution);
                                }
                            ?>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</section>

