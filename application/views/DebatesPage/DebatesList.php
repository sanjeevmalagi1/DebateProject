<section class="section-padding gray-bg" id="blog-page">
    <div class="text-center">
        <h1>Select Your Favorite Debate</h1>
    </div>

    <div class="container">
            <div class="row">
                <?php
                foreach ($debates as $debate){
                    $this->load->view('Partials/DebatesPage/Debate',$debate);
                }
                ?>
            </div>
        </div>
</section>
