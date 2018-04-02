<div class="blog_post margbot50 clearfix" data-animated="fadeInUp">
	<div class="blog_post_img">
		<div class="flexslider portfolio_single_slider">
			<ul class="slides">
        <?php
          foreach ($data['images'] as $key => $value) {
        ?>
            <li><img src="<?php echo base_url(); ?><?php echo $value ?>" alt="" /></li>
        <?php
          }
        ?>
			</ul>
		</div>
	</div>
	<div class="blog_post_descr text-sm-center">
		<a class="blog_post_title" ><?php echo $data['title'] ?></a>
		<hr id="<?php echo $anchor ?>">
	</div>
</div>
