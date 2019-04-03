<div class="content">
		<div class="container">
			<div class="row">
				<div class="results">
					<div class="results_inf">
						<h3>Получить результаты исследования</h3>
						<p>Введите семизначное КОДОВОЕ СЛОВО, указанное в Вашем Бланке заказа.</p>
						<p>Кодовое слово может состоять только из одних цифр или цифр и букв латинского алфавита. (Кодовое слово введите без учета написания прописных и заглавных букв). Например, 1597346 или GR759YR.</p>
					</div>
					<form action="<?php echo base_url('index.php/pages/check_captcha') ?>" method="POST"  target="_blank">
						<div class="results_footer "> 
							<!-- rounded border border-primary -->
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12 box_border">
									<div class="col-md-12">
										<div class="box">
											<div class="title">Кодовое слово</div>				
											<div class="inp">
												<input id="code" type="text" class="form-control" name="Codeword" placeholder="Введите кодовое слово">
											</div>										
										</div>
									</div>
									<div class="col-md-12">
										<div class="box box_last">
											<span class="capt">
												<?php echo $image; ?>
											</span>
											<div class="row">
												<div class="col-md-8 col-sm-8">
													<input type="text" name="text_captcha" class="form-control" placeholder="Введите код указанный на картинке" id="code_inp">										
												</div>
												<div class="col-md-4 col-sm-4">
													<input type="submit">									
												</div>										
											</div>
										</div>
									</div>									
								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<div class="mb-4 col-md-12">
										<div class="box box_1">
											<div class="title">
											Получить результаты на почту	
											<span class="check_box">
												<input type = 'checkbox' id = 'cb1' onchange = 'showOrHide("cb1", "cat1");'/>
												<span id = 'cat1' style = 'display: none;'>
													<input type="text" class="form-control" placeholder="Ваша почта" id="email">
												</span>
												</span>								
											</div>									
										</div>
									</div>									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>