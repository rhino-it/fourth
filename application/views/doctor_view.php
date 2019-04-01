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