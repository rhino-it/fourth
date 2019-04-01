<div class="content">
	<div class="container">
		<h2 class="service">Новости <a href="<?php echo base_url('index.php/pages/arhiv');?>">Архив <i class="fa fa-arrow-right"></i></a></h2>
		<div class="row news">
			<?php 
			foreach ($main_page_news as $news):
				?>
				<div class="col-md-4">
					<?php
					echo '<a href="';
					if($news['url']==false) {echo base_url('index.php/pages/page/').$news['id'];}
					else {echo $news['url'];} echo '">'
					?>
					<div class="news-block">
						<div class="news-img" style="">
							<img src="<?php echo base_url().'assets/images/photos/'.$news['foto']; ?>" alt="">
						</div>
						<div class="news-title">
							<?php
							if (strlen($news['tema_ru']) < 50) {
								echo $news['tema_ru'] . '<br>';
							} else {
								$text6 = substr($news['tema_ru'], 0, strpos($news['tema_ru'], ' ', strlen(substr($news['tema_ru'], 0, 50))));
								echo $text6 . '...';
							}
							?>
							
						</div>
						<div class="news-text">
							<?php
							if (strlen($news['page_text_ru']) < 120) {
								echo $news['page_text_ru'] . '<br><br>';
							} 
							else {
								$text5 = substr($news['page_text_ru'], 0, strpos($news['page_text_ru'], ' ', strlen(substr($news['page_text_ru'], 0, 120))));
								echo $text5 . '...';
							}
							?>	
						</div>
					</div>
				</a>
				
			</div>
		<?php endforeach ?>
	</div>
</div>
</div>