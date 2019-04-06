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
						<?php 
							$text=$d_c['tema_ru'];
							if (strpos($text, '/')) {
								$t1=strpos($text, '/');
								$name=substr($text, 0, $t1);
								$position=substr($text, $t1+1);
								echo '<h1>'.$name.'</h1>';
								echo '<span>'.$position.'</span>';
							}
							else{
								echo '<h1>'.$d_c['tema_ru'].'</h1>';
							}
						?>
					</div>
				</div>				
			</div>
			</div>
		<?php } ?>
		</div>		
	</div>