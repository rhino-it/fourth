<div class="footer">
	<div class="container">
		<h3 style="color: #fff;letter-spacing: 5px">Medical Clinic</h3>
		<div class="row foooter no-gutters">
			<?php 
			foreach ($footer_menu as $f_menu) {
				$footer_under_menu = $this->Get_model->md_menu($f_menu['id']);
			 ?>
			<div class="col">
				<div><span class="foot_title"><i><?php echo $f_menu['name_ru'];  ?></i></span></div>
				<?php
				if ($f_menu['id_page']<1) {
				  foreach ($footer_under_menu as $f_u_menu){ 
				 ?>
				<div><a href="
					<?php 
					if($f_u_menu['url']=='') {
									echo base_url().'index.php/pages/ulpage/'.$f_u_menu['id'];
								}
								else{
								  echo $f_u_menu['url']; 
								}	
				 ?>
				 "><i class="anim_border"><?php echo $f_u_menu['name_ru']; ?></i></a></div>
			<?php }}
			else{
				$footer_content = $this->Get_model->footer_content($f_menu['id_page']);
				foreach ($footer_content as $f_content){ 
			?>	
			<div>
			<?php	
					echo $f_content['page_text_ru'];
				}
				?>
			</div>
				<?php
			} ?>
			</div>
			<?php } ?>
		</div>
	</div>
	<span style="color: #fff;background: #0072EF;margin-bottom:-20px;padding-bottom: 0;font-family: Calibri">Разработка IT-Academy© oshsu 2019.</span>
</div>
<!-- Modal -->
<!-- Логин -->
<div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header ">
				<h5 class="modal-title text-center 	w-100" id="exampleModalLabel" >Логин</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form class="px-4 py-3" action="<?php echo base_url('index.php/pages/user_come_in'); ?>" method="POST">
					<div class="form-group" >
						<label for="exampleDropdownFormEmail1">Логин</label>
						<input type="text" name="login" class="form-control" id="exampleDropdownFormEmail1" placeholder="medic">
					</div>
					<div class="form-group" >
						<label for="exampleDropdownFormPassword1">Пароль</label>
						<input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="********">
					</div>
					<!-- <div class="form-check"> -->
						<!-- <input type="checkbox" class="form-check-input" id="dropdownCheck"> -->
						<!-- <label class="form-check-label" for="dropdownCheck"> -->
							<!-- Запомнить -->
							<!-- </label> -->
							<!-- </div> -->
							<button type="submit" class="btn btn-primary">Вход</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Логин конец -->
		<!-- карта -->
		<div class="modal fade" id="mapmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header ">
						<h5 class="modal-title text-center 	w-100" id="exampleModalLabel">Мы на карте</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div><span class="foot_title"><i>Мы на Google карте</i></span></div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d603.1783704162322!2d72.82259524259183!3d40.50145118307597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bdae6167fc80b7%3A0x1d5e507810da974d!2z0J3QsNGA0L7QtNC90YvQuQ!5e0!3m2!1sru!2skg!4v1550403273171"  width="100%" height="400"  frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
								<!-- <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
									<button type="button" class="btn btn-primary">Вход</button>
								</div> -->
							</div>
						</div>
					</div>
					<!-- карта конец -->
					<!-- Добавление PDF результата -->
					<div class="modal fade" id="inputmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header ">
									<h5 class="modal-title text-center 	w-100" id="exampleModalLabel">Добавление PDF результата</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-horizontal" method="post" id="patients_file" enctype="multipart/form-data" action="<?php echo base_url('index.php/pages/add_result'); ?>" >
										<div class="form-group">
											<label for="file" class="col-sm-2 control-label">Файл</label>
											<div class="col-sm-8">
												<input type="file" name="pdf_file" id="file">
												<input type="hidden" name="id_patients" id="id_patients" value="">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-8">
												<button type="submit" id="submit" class="btn btn-info">Добавить</button> 
											</div>
										</div>
									</form>
								</div>
								<!-- <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
									<button type="button" class="btn btn-primary">Вход</button>
								</div> -->
							</div>
						</div>
					</div>
					<!--конец Добавления PDF результата -->

					<!-- Фильтрация по дате -->
					<div class="modal fade" id="filtermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header ">
									<h5 class="modal-title text-center 	w-100" id="exampleModalLabel">Фильтрация</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form class="form-horizontal" method="post" id="patients_file" enctype="multipart/form-data" action="<?php echo base_url('index.php/pages/patients'); ?>" >
										<div class="form-group">
											<div class="row no-gutters justify-content-around">
												<div class="col-1" style="padding-top: 2%;">С</div>
												<div class="col-5"><input type="date" class="form-control" id="ot" name="ot" value="<?php
												$start_date = date('Y-m-d', mktime(0, 0, 0, date("m"), 1, date("Y")));
												echo $start_date; ?>"></div>
												<div class="col-1" style="padding-top: 2%; padding-left: 5px;">ПО</div>
												<div class="col-5"><input type="date" class="form-control" id="do" name="do" value="<?php echo date('Y-m-d');?>"></div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-sm-offset-2 col-sm-8">	
												<button type="submit" id="submit" class="btn btn-info">Вывести результат</button>
											</div>
										</div>
									</form>
								</div>
								<!-- <div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
									<button type="button" class="btn btn-primary">Вход</button>
								</div> -->
							</div>
						</div>
					</div>


					<div class="modal fade" id="datamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header ">
									<h5 class="modal-title text-center 	w-100" id="exampleModalLabel">Данные пациента</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body" id="data_patient">
									
								</div>
							</div>
						</div>
					</div>
					<!-- Фильтрация по дате -->

					<!-- Model end -->
					<script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'; ?>"></script>
					<script src="<?php echo base_url().'assets/js/slick.min.js'; ?>"></script>
					<script src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>				
					<script src="<?php echo base_url().'assets/js/index.js'; ?>"></script>
					<script type="text/javascript">
						var BASE_URL="<?php echo base_url();?>";
						function ajax(id)
						{
							$.ajax({
								url: BASE_URL + 'index.php/ajax/category/'+id,
								success: function (data) {
									$('#analys').html(data);
								}
							});
						}						
						function id_pat(id)
						{	
							var i_p = document.getElementById('id_patients');	
							i_p.value=id;													
						}
						function data_patient(id)
						{

							$.ajax({
								url: BASE_URL + 'index.php/ajax/data_patient/'+id,
								success: function (data) {
									$('#data_patient').html(data);
								}
							});
						}
						
				</script>
				<script type="text/javascript">	
					$('.slider-for').slick({
						slidesToShow: 1,
						slidesToScroll: 1,
						arrows: false,
						fade: true,
						asNavFor: '.slider-nav'
					});
					$('.slider-nav').slick({
						slidesToShow: 4,
						slidesToScroll: 1,
						asNavFor: '.slider-for',
						dots: true,
						arrows: true,
						centerMode: true,
						focusOnSelect: true
					});
				</script>
			</body>
			</html>

