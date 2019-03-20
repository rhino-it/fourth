<div class="content">
	<div class="container">
		<div class="row service">
			<div class="title title_header">НОВОСТИ</div>
			<div class="main_news">
				<?php foreach ($inf as $inf): ?>
				<div class="box-img" style="background-image: url('<?php echo base_url().$inf['foto'];?>')">
				</div>
				<div class="title">
					<?php
						echo $inf['tema_ru'];
					 ?>
				</div>
				<div class="text">
					<?php echo $inf['page_text_ru']; ?>
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