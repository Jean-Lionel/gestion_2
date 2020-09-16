<div>
	

	

	<div class="medium-12 columns ">
		<div class="meduim-8 columns">
			<h4>Rapport des préseneces du personnel de l'ahmar : Service Administratif</h4>
		</div>

		<div class="medium-4 columns">
			<form action="">
				<div class="medium-6 columns">
					<input type="date" name="edate" value="<?= $this->request->query('edate') ?>">
				</div>
				<div class="medium-4 columns">
					<button>chercher</button>
				</div>
			</form>
			
		</div>
		
	</div>
	<table>
		
		<thead>
			<tr>
				<th>No</th>
				<th>SERVICE</th>

				<th colspan="2">NOM ET PRENOM</th>

				<th>PRESENCE</th>

				<th>ABSENCE JUSTIFIES</th>

				<th>ASCENCES NON JUSTIFIES</th>
				<th>OBSERVATION</th>
			</tr>
			
		</thead>

		<tbody>

			<?php $x=0; foreach ($rapports as $value):?>

			<tr>
				<td><?= ++$x; ?></td>
				<td>SERVICE</td>
				<td colspan="2"><?= $value->name ?></td>
				<td><?= $value->presence ?></td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				
			</tr>

		<?php endforeach; ?>

	</tbody>
</table>



</div>