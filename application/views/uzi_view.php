<div class="content">
	<div class="container">
		<div class="row service">
				<?php foreach ($uslugi_detail as $us_det): ?>
		<div class="title title_header"><?php echo $us_det['tema_ru'] ?></div>
			<div class="main_news">
				<div class="box-img" style="background-image: url('<?php echo base_url().$us_det['foto'];?>')">
				</div>
<!-- 				<div class="title">
					<?php
						echo $us_det['tema_ru'];
					 ?>
				</div> -->
				<div class="text">
					<?php echo $us_det['page_text_ru']; ?>
				</div>
			<?php endforeach ?>				
			</div>
			<div class="sidebar">
				<ul>
					<?php 
						foreach ($uslugi as $u) {
							echo '<li><a href="'.base_url('index.php/pages/uslugi_detail/'.$u['id']).'">'.$u['tema_ru'].'</a></li>';
						}
				  ?>
				</ul>
			</div>
		</div>
	</div>
</div>