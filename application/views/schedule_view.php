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
	<?php
		 $schedule_model = $this->Get_model->ul_schedule_model($value['id_page']);
		 foreach ($schedule_model as $s_l) {
	?>
		<div class="row service">				
		<div class="title title_header"><?php echo $s_l['tema_ru']; ?></div>
			<div class="main_news">
				<?php 
		 	if ($s_l['foto']!=FALSE) {
		 		?>
		 		<div class="box-img" style="background-image: url('<?php echo base_url().'assets/images/photos/'.$s_l['foto']; ?>')"></div>
		 			<?php 
		 	}
				 ?>
<!-- 				<div class="title">
					<?php
						echo $s_l['tema_ru'];
					 ?>
				</div> -->
				<div class="text">		
					<?php
					if ($s_l['page_text_ru']!='') {
						echo $s_l['page_text_ru']; 
					 } 	
					?>
				</div>
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
<?php 
if ($s_l['gallery']!=FALSE) {
 ?>
<div class="container">
	<div class="row">
		<div class="col-md-9" style="padding-right: 60px;">
				<?php 

						echo '  						
							<div class="slider-for">
							';
						$arr = explode(",", $s_l['gallery']);						 
						foreach ($arr as $img) {
							echo '<div class="img" style="background-image: url('.base_url().'assets/images/photos/'.$img.');"></div>';
						}
						echo '
							</div>
							<div class="slider-nav">';
						$arr = explode(",", $s_l['gallery_thumb']);						 
						foreach ($arr as $img) {
							echo '<div class="img2" style="background-image: url('.base_url().'assets/images/photos/thumb/'.$img.');"></div>';
						}
						echo '
						</div>
						';
						 ?>
		</div>
	</div>
</div>
<?php 
				}
 ?>
		</div>
<?php 
			}
 ?>
</div>