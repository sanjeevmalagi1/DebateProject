<div class="col-xs-12 col-sm-4" style="margin:10px auto;">
                    <div class="single-blog">
                        <div class="blog-content">
                            <h3><a href="#"><?php echo $Title; ?></a></h3>
                            <ul class="blog-meta">
                                <li><span class="ti-calendar"></span> <a href="#"><?php echo $CreatedAt ?></a></li>
                            </ul>
                            <p>
                              <?php
                              echo $Description;
                              ?>
                            </p>
                            <div class="text-center">
                                <a href="<?php  echo base_url() ?>index.php/Debates/debate/<?php echo $ID ?>" class="button">Participate</a>
                            </div>
                        </div>
                    </div>
                </div>
