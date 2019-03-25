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
				<th scope="col">Итоговоая сумма</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($ex_medic_patient_data as $patients) {
				$this->db->where('id', $patients['id_patient']);
				$row = $this->db->get('ex_medic_patient')->row();	   	
				?>
				<tr>
					<th scope="row"><?php echo $patients['id']; ?></th>
					<td><?php echo $row->name; ?></td>
					<td><?php echo $patients['data']; ?></td>
					<td><?php echo $patients['result']; ?></td>
					<td><?php echo $patients['md5']; ?></td>
					<td><?php echo $patients['sum']; ?> сом</td>
				</tr>
			<?php  }?>


		</tbody>

	</table>
	<div class="pagination_user">
		<ul>
			<?php
			echo $this->pagination->create_links();
			?>
		</ul>
	</div>
	</div>