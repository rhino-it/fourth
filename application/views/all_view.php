<div class="center-recipes">Список пациентов</div>	
<div class="container">
		
		<?php foreach ($patients as $patients) {
		 ?>
		 <div class="patients_border">
		 <div class="row">
		<div class="col-1"><?php echo $patients['id']; ?></div>
		<div class="col-3"><?php echo $patients['id_patient']; ?></div>
		<div class="col-2"><?php echo $patients['data']; ?></div>
		<div class="col-2"><?php echo $patients['result']; ?></div>
		<div class="col-2"><?php echo $patients['md5']; ?></div>
		<div class="col-2"><?php echo $patients['sum']; ?> сом</div>
		</div></div>
	<?php  }?>
		<div class="pagination_user">
			<ul>
				<?php
					echo $this->pagination->create_links();
				?>
			</ul>
		</div>
	

</div>