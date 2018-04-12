<section class="section-padding gray-bg" id="blog-page">
    <div class="text-center">
        <h1>Be a Social Entreprenuer</h1>
    </div>

    <div class="container">
            <div class="row">
                <?php
                foreach ($ideas as $idea){
                    $this->load->view('Partials/IdeasHub/Idea',$idea);
                }
                ?>
            </div>
        </div>
</section>
