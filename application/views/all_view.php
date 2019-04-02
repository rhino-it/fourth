<div class="center-recipes">Список пациентов</div>	
<div class="container">

	<table class="table">
		<thead class="thead-light">
			<tr>
				<th scope="col">#</th>
				<th scope="col">ФИО</th>
				<th scope="col">Дата</th>
				<th scope="col">PDF результат</th>
				<th scope="col">Кодовое слово</th>
				<th scope="col">Итоговая сумма</th>
				<th scope="col">Изменения</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=0; ?>
			<?php foreach ($ex_medic_patient_data as $patients) {
				$this->db->where('id', $patients['id_patient']);
				
				$row = $this->db->get('ex_medic_patient')->row();	   	
				?>
				<tr>
					<th scope="row"><?php echo $patients['id']; ?></th>
					<td><?php echo $row->name; ?></td>
					<td><?php echo $patients['data']; ?></td>
					<td><a href="<?php echo base_url('assets/pdf/'.$patients['result']); ?>" style="color: blue;" target="blank"><?php echo $patients['result']; ?></a></td>
					<td><?php echo $patients['md5']; ?></td>
					<td ><?php echo $patients['sum']; ?> сом</td>
					<td><a onclick="id_pat(<?php echo $patients['id']; ?>)"  href="" data-toggle="modal" data-target="#inputmodal" class="btn btn-sm btn-info" role="button" >Добавить</a></td>
				</tr>
			<?php  }?>
		</tbody>

	</table>
		<div class="row justify-content-between">
			<div class="col pb-3">
				<a href="" data-toggle="modal" data-target="#filtermodal" class="btn btn-sm btn-info" role="button" >Фильтрация по дате</a>
			</div>
			<div class="col-4 pb-3">
				<p><?php if (isset($_SESSION['ot'])){
					foreach ($sum as $sum) {
					$i=$i+$sum['sum'];
				} 
				 echo 'Итоговая сумма за выбранный период: '.$i.' сом'; 
				$_SESSION['ot']=NULL;}
				?>
				</p>
			</div>
		</div>
	<div class="pagination_user">
		<ul>
			<?php
			echo $this->pagination->create_links();
			?>
		</ul>
	</div>
</div>

