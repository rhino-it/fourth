<div class="content">
	<div class="container">
<?php foreach ($uslugi_detail as $us_det): ?>
		<ol class="breadcrumb">
			<?php
					echo '
						<li><a href="'.base_url().'">Главная <span style="padding-right: 5px;">/</span></a></li>
						<li><a href="#">Услуги <span style="padding-right: 5px;">/</span></a></li>
						<li><a href="#"  class="active">'.$us_det['tema_ru'].'</a></li>
					';
			?>
		</ol>
		<div class="row service">				
		<div class="title title_header"><?php echo $us_det['tema_ru'] ?></div>
			<div class="main_news">
				<div class="box-img" style="background-image: url('<?php echo base_url().'assets/images/photos/'.$us_det['foto'];?>')">
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
				<h1>Услуги</h1>
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