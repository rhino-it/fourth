<div class="container">
		<ol class="breadcrumb">
			<?php
				echo '<li><a href="'.base_url().'">Главная <span style="padding-right: 5px;">/</span></a></li>';
				foreach ($main_menu as $row) {
					echo  '<li><a href="#" class="active">'.$row['name_ru'].'</a></li>';
				}
			?>
		</ol>
	</div>
	<div class="container">
		<div class="doctor">
			<?php 
				foreach ($doctor as $d) {
			?>
			<div class="left">
				<div class="bor">
					<?php echo $d['tema_kg'] ?>
				</div>
				<img src="<?php echo base_url().'assets/images/photos/'.$d['foto']; ?>" alt="">
			</div>
			<div class="right">
				<?php echo $d['page_text_ru'] ?>
			</div>
		<?php } ?>
		</div>		
	</div>