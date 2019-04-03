<div class="content">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url(); ?>"> Главная <span style="padding-right: 5px;">/</span></a></li>
			<li><a href="#"> Архив<span style="padding-right: 5px;">/</span></a></li>

		</ol>
		<h2 class="service">Архив</h2>
		<div class="row news">
			<?php 
			foreach ($arhiv as $ar):
				?>
				<div class="col-md-4">
					<?php
					echo '<a href="';
					if($ar['url']==false) {echo base_url('index.php/pages/page/').$ar['id'];}
					else {echo $ar['url'];} echo '">'?>
					<div class="news-block">
						<div class="news-img" style="">
							<img src="<?php echo base_url().'assets/images/photos/'.$ar['foto']; ?>" alt="">
						</div>
						<div class="news-title">
							<?php
							if (strlen($ar['tema_ru']) < 50) {
								echo $ar['tema_ru'] . '<br>';
							} else {
								$text6 = substr($ar['tema_ru'], 0, strpos($ar['tema_ru'], ' ', strlen(substr($ar['tema_ru'], 0, 50))));
								echo $text6 . '...';
							}
							?>
						</div>
						<div class="news-text">
							<?php
							if (strlen($ar['page_text_ru']) < 120) {
								echo $ar['page_text_ru'] . '<br><br>';
							} 
							else {
								$text5 = substr($ar['page_text_ru'], 0, strpos($ar['page_text_ru'], ' ', strlen(substr($ar['page_text_ru'], 0, 120))));
								echo $text5 . '...';
							}
							?>	
						</div>
					</div>
				</a>
				
			</div>
		<?php endforeach ?>
	</div>
	<div class="pagination_user">
		<ul>
			<?php
			echo $this->pagination->create_links();
			?>
		</ul>
	</div>
</div>
</div>