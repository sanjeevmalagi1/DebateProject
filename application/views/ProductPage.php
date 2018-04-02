<section id="HMS" class="breadcrumbs_block clearfix parallax">
	<div class="container center">
		<h2><?php echo $pageTitle ?></h2>
		<p>We Deal best quality <?php echo $pageTitle ?></p>
	</div>
</section>

<section style="padding-top : 25px;">

	<!-- CONTAINER -->
	<div class="container">

		<!-- ROW -->
		<div class="">

			<div class="col-lg-9 col-md-9 padbot50 ">
        <?php
          foreach ($products as $key => $value){
        ?>
        <?php
          $data['data'] = $value;
					if(isset($products[$key+1])){
						$data['anchor'] = $products[$key+1]['id'];
					}
					else{
						$data['anchor'] = $products[$key]['id'];
					}
          $this->load->view('Partials/product',$data);
        }
        ?>
			</div><!-- //BLOG BLOCK -->

			<!-- SIDEBAR -->
			<div class="col-lg-2 col-md-2 cont">


				<!-- META WIDGET -->
				<div class="sidepanel widget_meta" >
					<ul>
            <?php
            foreach ($products as $key => $value){
            ?>
                <li><a href="<?php echo base_url() ?>index.php/home/<?php echo $pageId ?>#<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a></li>
            <?php
              }
            ?>
					</ul>
				</div><!-- //META WIDGET -->

				<!-- POPULAR TAGS WIDGET -->
				<!--div class="sidepanel widget_tags">
					<h3><b>Popular</b> Tags</h3>
          <ul>
            <?php
            foreach ($products as $key => $value){
            ?>
                <li><a href="<?php echo base_url() ?>index.php/home/<?php echo $pageId ?>#<?php echo $value['id'] ?>"><?php echo $value['title'] ?></a></li>
            <?php
              }
            ?>
					</ul>
				</div--><!-- POPULAR TAGS WIDGET -->


			</div><!-- //SIDEBAR -->
		</div><!-- //ROW -->
	</div><!-- //CONTAINER -->
</section>
</div><!-- //PAGE -->
