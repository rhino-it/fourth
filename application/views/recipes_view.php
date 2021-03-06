<div class="center-recipes">Регистрация пациента</div>	
<form action="<?php echo base_url('index.php/Pages/medicoment_insert'); ?>" method="POST" enctype="multipart/form-data" id="form">
<div class="container">
	<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" id="data-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Данные пациента</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="price-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" onclick="ajax(1);">Выбрать и узнать стоимость анализов</a>
		</li>
		<!-- <li class="nav-item">
			<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Итого</a>
		</li> -->
	</ul>




	<div class="tab-content" id="myTabContent">
		<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="data-tab">
			<div class="fio">
				
					<div class="form-group">
						<label for="name">ФИО:</label>
						<input type="text" onchange="show2()" class="form-control" name="fio" aria-describedby="emailHelp" placeholder="Азаматович">
							<datalist id="name" >

							<?php for ($i=1; $i <10; $i++) { 
								?>
								<option value="Алмазов Алтынбек Азаматович">
								<?php } ?>
							</datalist>
							<!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
						</div>
						<div class="form-group" >
							<label for="birthday">Дата рождения:</label>
							<input type="date" class="form-control" id="birthday" name="birthday">
						</div>
						<div class="form-group" >
							<label for="address">Домашний адрес:</label>
							<input type="text" class="form-control" id="address" name="address">
						</div>

						<div class="form-group" >
							<label for="phone.number">Номер телефона:</label>
							<input type="tel" class="form-control" id="phone.number" name="phone_number">
						</div>

						<a class="btn btn-primary"  onclick="getElementById('price-tab').click();" style="color: #fff;">Далее &rarr; </a>
					

				</div> 

			</div>

			<script type="text/javascript">

				// function show2() {
				// 	alert('confirmed');
				// }

			</script>
		
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="price-tab">
				<div class="padding">
					
						<div class="row justify-content-between no-gutters">
						<div class="form-group col-md-5">
							<label for="exampleFormControlSelect1">Выберите категорию анализа</label>
							<select class="form-control" id="exampleFormControlSelect1" onchange="ajax(this.options[this.selectedIndex].value);">

								<?php foreach ($recipes_category as $category) {
								?>
								<option value="<?php echo $category['id'];?>" ><?php echo $category['name'];?></option>

								<?php } ?>
								
							</select>
						</div>
						 <div class="w-100"></div>
						<div class="form-group col-md-5">
							<label for="exampleFormControlSelect2">Выберите вид анализа</label>
								<ul class="table_1_li" id="analys">
									
								</ul>
						</div>

						<div class="form-group col-md-1 text-center pt-5">
							<p style=" margin-bottom: 0px; padding-top: 20px;"><i style="font-size: 2em;" class="fa fa-exchange"></i></p>
						</div>
						<div class="form-group col-md-5">
							<label for="exampleFormControlSelect2">Выбранный вид анализа</label>
							<select  size="5" multiple class="form-control table_2_option" id="selected_analys">
								
							</select>
						</div>
						</div>
				
					<div class="row justify-content-end">
					  <div class="form-group col-md-5">
					    <div class="justify-content-end">				
					    	<div class="text-right font-weight-bold h4">Итого: <span id="result_summa_medicoment">0</span> сом</div>		
					  	</div>
						</div>					
					</div>
					
					<div class="d-flex justify-content-between w-100 pb-4">
						<a class="btn btn-primary" onclick="getElementById('data-tab').click();" style="color: #fff;" > &larr; Назад</a>
						<a class="btn btn-primary" onclick="click_medic_end()" style="color: #fff;" >Зарегистрировать</a>	
				  </div>					
				</div>
			</div>
		</div>
	</div>
</form>