<?php  if($Result){ ?>
<section id="result" class="testimonial-area section-padding gray-bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 ">
                    <div class="page-title">
                        <h2>Result</h2>
                        <p>
                          <?php echo $Result ?>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php
}
else
{
?>
<section id="result" class="testimonial-area section-padding gray-bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 ">
                    <div class="page-title">
                        <h2>Result Not Yet Announced</h2>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php
}
?>
