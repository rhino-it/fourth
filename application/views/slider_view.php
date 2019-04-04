<div class="slider">
			
				<div id="demo" class="carousel slide" data-ride="">


					<!-- Indicators -->

					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					</ul>


					<!-- The slideshow -->

					<div class="carousel-inner">
						<?php 
						$i=0;
						foreach ($slider as $slide) {
						?>

						<div class="carousel-item <?php if ($i==0) echo 'active';?>">
							<div class="img_carousel" style="background-image: url('<?php echo base_url(); ?>assets/images/photos/<?php echo $slide['foto'];?>');"></div>
	 						<div class="carousel-caption">
								<h3><b><?php echo $slide['tema_ru'];?></b></h3>
							</div>
						</div>
						<?php
$i=1;
					} ?>
					</div>

					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
						</div>
					</div>



				</div>
			
		</div>

