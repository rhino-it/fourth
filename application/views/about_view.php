<div class="container">
		<h2 class="service">О нас</h2>
		<div class="about">
					<?php 
						foreach ($about as $a) {
							echo '
								<div class="img"><img src="'.base_url().$a['foto'].'" alt=""></div>
								<div class="text">
									'.$a['page_text_ru'].'
								</div>
								';
						}
					?>
			</div>	
	</div>
</div>