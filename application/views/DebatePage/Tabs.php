<section id="debate" class="gray-bg section-padding" id="service-page">
<div class="container">
<div class="row">
    <div class="col-xs-12">
        <div id="caption_slide" class="carousel slide caption-slider" data-ride="carousel">
        <ol class="carousel-indicators caption-indector">
            <li data-target="#caption_slide" data-slide-to="0" style="color : #9E9E9E;">
                <strong>Best Of Both</strong>
            </li>
            <li data-target="#caption_slide" data-slide-to="1" class="active" style="color : #4CAF50;">
                <strong >Pro </strong>The cause.
            </li>
            <li data-target="#caption_slide" data-slide-to="2" style="color : #F44336;">
                <strong>Against</strong>The Topic.
            </li>

        </ol>
        <div class="carousel-inner" role="listbox">
                <div class="item row">
                    <div class="v-center">
                        <div class="col-md-6 row">
                            <?php
                              foreach ($comments as $comment) {
                                if($comment['Type'] == 'PRO'){
                                    $this->load->view('Partials/DebatePage/ProComment',$comment);
                                }
                              }
                            ?>
                        </div>
                        <div class="col-md-6 row">
                            <?php
                              foreach ($comments as $comment) {
                                if($comment['Type'] == 'AGAINST'){
                                    $this->load->view('Partials/DebatePage/AgainstComment',$comment);
                                }
                              }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="item row">
                    <div class="v-center">
                        <div class="col-xs-12 col-md-10 row">
                            <?php
                            $data['debateId'] = $ID;
                            $this->load->view('Partials/DebatePage/ProForm',$data);
                            ?>
                            <?php
                              foreach ($comments as $comment) {
                                if($comment['Type'] == 'PRO'){
                                    $this->load->view('Partials/DebatePage/ProComment',$comment);
                                }
                              }
                            ?>
                        </div>

                    </div>
                </div>

                <div class="item row">
                    <div class="v-center">
                        <div class="col-xs-12 col-md-10 row">
                            <?php
                            $this->load->view('Partials/DebatePage/AgainstForm');
                            ?>
                            <?php
                              foreach ($comments as $comment) {
                                if($comment['Type'] == 'AGAINST'){
                                    $this->load->view('Partials/DebatePage/AgainstComment',$comment);
                                }
                              }
                            ?>
                        </div>
                    </div>
                </div>

            <!-- Indicators -->

        </div>
    </div>
</div>
</div>
    </section>

<style>


.card{
    background: #fff;
    border-radius: 2px;
    display: inline-block;
    padding: 1.5em;
    margin : 1em;
    position: relative;
}

.against{
    background: #FFEBEE !important;
}

.pro{
    background: #E8F5E9 !important;
}
</style>
