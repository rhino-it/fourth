<div class="container">
Главная / 
<?
		foreach ($ul_menu as $row) {
			echo '<h2 class="service">'.$row['name_ru'].'</h2>';
		}

?>

	<?php
		 $schedule_model = $this->Get_model->ul_schedule_model($row['id_page']);

		 foreach ($schedule_model as $s_l) {
		 	echo $s_l['page_text_ru'];
		 }
	?>
</div>