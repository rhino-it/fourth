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
				foreach ($doctor_collective as $d_c) {
			?>
			<div class="paddding">
				<div class="content-doc" onclick="location.href='<?php echo base_url().'index.php/pages/doctor/'.$d_c['id']; ?>'">
					<div class="img" style="background-image: url(<?php echo base_url().'assets/images/photos/'.$d_c['foto'];?>);"></div>
					<div class="text">
						<h1><?php echo $d_c['tema_ru'] ?></h1>
						<span><?php echo $d_c['tema_kg'] ?></span>						
					</div>
				</div>				
			</div>
		<?php } ?>
		</div>		
	</div>