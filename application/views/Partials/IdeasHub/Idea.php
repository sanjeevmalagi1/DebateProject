<div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    <div class="single-blog" style="margin : 10px auto;">
                        <div class="blog-content">
                            <h3><a href="#"><?php  echo $Heading; ?></a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-calendar"></span> <a href="#"><?php echo date('M j Y g:i A', strtotime($CreatedAt)); ?></li>
                            </ul>
                            <p>
                              <?php  echo substr($Description,0,100).'...'; ?>
                            </p>
                            <div class="text-center">
                                <a href="<?php  echo base_url() ?>index.php/IdeasHub/ViewIdea/<?php echo $ID ?>" class="button">See Solutions</a>
                            </div>
                        </div>
                    </div>
                </div>
