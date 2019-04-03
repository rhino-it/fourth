<div class="container">
		<ol class="breadcrumb">
			<?php
			foreach ($navigation as $value) {
				$a=$value['id_type_page'];
				$word=$value['tema_ru'];
			}
			if ($a!=1) {
				$test = $this->Get_model->navigation_doctor($a);
				foreach ($test as $row1) {
					$a=$row1['id_parent'];
				}
				$test1 = $this->Get_model->ul_menu($a);
			}

					echo '<li><a href="'.base_url().'">Главная <span style="padding-right: 5px;">/</span></a></li>';
					if (isset($test1)) {
						foreach ($test1 as $row1) {
							echo  '<li><a href="'.$row1['url'].'">'.$row1['name_ru'].' <span style="padding-right: 5px;">/</span></a></li>';
						}
					}
					if (isset($test)) {
						foreach ($test as $row) {
							echo  '<li><a href="'.$row['url'].'">'.$row['name_ru'].' <span style="padding-right: 5px;">/</span></a></li>';
						}
					}
					echo  '<li><a href="#"  class="active">'.$word.'</a></li>';
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