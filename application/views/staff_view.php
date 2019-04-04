<div class="container">
		<ol class="breadcrumb">
			<?php
			foreach ($ul_menu as $value) {
				$a=$value['id_parent'];
				$word=$value['name_ru'];
			}
			if ($a!=1) {
				$test = $this->Get_model->ul_menu($a);
			}
					echo '<li><a href="'.base_url().'">Главная <span style="padding-right: 5px;">/</span></a></li>';
					if (isset($test)) {
						foreach ($test as $row) {
							echo  '<li><a href="#">'.$row['name_ru'].' <span style="padding-right: 5px;">/</span></a></li>';
						}
					}
					echo  '<li><a href="#"  class="active">'.$word.'</a></li>';
			?>
		</ol>
	</div>
	<div class="container">
		<div class="doctor">
			<?php 
				foreach ($doctor_collective as $d_c) {
			?>
			<div class="col-md-4">
				
			<div class="paddding">
				<div class="content-doc" onclick="location.href='<?php echo base_url().'index.php/pages/doctor/'.$d_c['id']; ?>'">
					<div class="img" style="background-image: url(<?php echo base_url().'assets/images/photos/'.$d_c['foto'];?>);"></div>
					<div class="text">
						<h1><?php echo $d_c['tema_ru'] ?></h1>
						<span><?php echo $d_c['tema_kg'] ?></span>						
					</div>
				</div>				
			</div>
			</div>
		<?php } ?>
		</div>		
	</div>