<div class="content">
	<div class="container">
				<?php foreach ($inf as $inf): ?>
		<ol class="breadcrumb">
			<?php
					echo '
						<li><a href="'.base_url().'">Главная <span style="padding-right: 5px;">/</span></a></li>
						<li><a href="#">Архив <span style="padding-right: 5px;">/</span></a></li>
						<li><a href="#"  class="active">'.$inf['tema_ru'].'</a></li>
					';
			?>
		</ol>
		<div class="row service">
			<div class="title title_header">НОВОСТИ</div>
			<div class="main_news">
					<div class="box-img" style="background-image: url('<?php echo base_url().'assets/images/photos/'.$inf['foto'];?>')">
					</div>
					<div class="title">
						<?php
						echo $inf['tema_ru'];
						?>
					</div>
					<div class="text">
						<?php 
						echo $inf['page_text_ru'];
						echo '  						
						<div class="row">
							<div class="slider-for">
							';
						$arr = explode(",", $inf['gallery']);						 
						foreach ($arr as $img) {
							echo '<div class="img" style="background-image: url('.base_url().'assets/images/photos/'.$img.');"></div>';
						}
						echo '
							</div>
							<div class="slider-nav">';
						$arr = explode(",", $inf['gallery_thumb']);						 
						foreach ($arr as $img) {
							echo '<div class="img2" style="background-image: url('.base_url().'assets/images/photos/thumb/'.$img.');"></div>';
						}
						echo '
							</div>
						</div>
						';
						?>
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