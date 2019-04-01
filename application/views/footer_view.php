<div class="footer">
	<div class="container">
		<h3 style="color: #fff;letter-spacing: 5px">Medical Clinic</h3>
		<div class="row foooter no-gutters">
			<div class="col-md-3">
				<div><span class="foot_title"><i>Обучение</i></span></div>
				<div><a href=""><i class="anim_border">Тематический календарь циклов</i></a></div>
				<div><a href=""><i class="anim_border">Цены</i></a></div>
				<div><a href=""><i class="anim_border">Литература</i></a></div>
				<div><a href=""><i class="anim_border">Клинические случаи</i></a></div>
				<div><a href=""><i class="anim_border">Фотоархив</i></a></div>
				<div><a href=""><i class="anim_border">Фонд тестовых заданий</i></a></div>
			</div>
			<div class="col-md-2">
				<div><span class="foot_title"><i>О компании</i></span></div>
				<div><a href=""><i class="anim_border">Миссия</i></a></div>
				<div><a href=""><i class="anim_border">История</i></a></div>
				<div><a href=""><i class="anim_border">Преимущества</i></a></div>
				<div><a href=""><i class="anim_border">Лицензии</i></a></div>
				<div><a href=""><i class="anim_border">Сертификаты</i></a></div>
			</div>
			<div class="col-md-2"><span class="foot_title"><i>Партнеры</i></span><div><a href=""><i class="anim_border">Fair Medical Japan Co LTD</i></a></div>
			<div><a href=""><i class="anim_border">ОсОО «Орда Мед»</i></a></div>
			<div><a href=""><i class="anim_border">CPI- Germany</i></a></div>
			<div><a href=""><i class="anim_border">Samsung Healthcare</i></a></div></div>

			<div class="col-md-2"><span class="foot_title"><i>Мобильная УЗД</i></span></div>
			<div class="col-md-3">
				<span class="foot_title"><i>Наши данные</i></span>
				<div><a href=""><i class="anim_border"><i class="fa fa-map-marker"></i> г. Ош, улица Исанова 31/35</i></a></div>
				<div><a href=""><i class="anim_border"><i class="fa fa-envelope-open"></i>  mk_clinic@gmail.com</i></a></div>
				<div><a href=""><i class="anim_border"><i class="fa fa-phone"></i> + 996(772)424008, + 996(0770)450654</i></a></div>
			</div>
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
										<div class="form-group no-gutters">
											<div class="row">
												<div class="col">От:</div>
												<div class="col">До:</div>
											</div>
											<div class="row">
												<div class="col"><input type="date" class="form-control" id="ot" name="ot"></div>
												<div class="col"><input type="date" class="form-control" id="do" name="do"></div>
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
					<!-- Фильтрация по дате -->

					<!-- Model end -->
					<script src="<?php echo base_url().'assets/js/jquery-3.3.1.js'; ?>"></script>
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
					</script>
				</body>
				</html>