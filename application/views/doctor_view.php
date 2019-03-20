	<div class="container">
		<div class="doctor">
			<?php 
				foreach ($doctor as $d) {
			?>
			<div class="left">
				<img src="<?php echo base_url().$d['foto']; ?>" alt="">
				<div class="bor">
					<?php echo $d['tema_kg'] ?>
				</div>
			</div>
			<div class="right">
				<?php echo $d['page_text_ru'] ?>
			</div>
		<?php } ?>
		</div>		
	</div>