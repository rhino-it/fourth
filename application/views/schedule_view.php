<div class="container">
		<ol class="breadcrumb">
			<?php
			foreach ($ul_menu as $value) {
				$a=$value['id_parent'];
				$word=$value['name_ru'];
			}
			$test = $this->Get_model->ul_menu($a);

					echo '<li><a href="'.base_url().'">Главная <span style="padding-right: 5px;">/</span></a></li>';
				foreach ($test as $row) {
					echo  '<li><a href="#">'.$row['name_ru'].' <span style="padding-right: 5px;">/</span></a></li>';
				}
					echo  '<li><a href="#"  class="active">'.$word.'</a></li>';
			?>
		</ol>
	<?php
		 $schedule_model = $this->Get_model->ul_schedule_model($value['id_page']);
		 foreach ($schedule_model as $s_l) {
		 	echo $s_l['page_text_ru'];
		 }
	?>
</div>