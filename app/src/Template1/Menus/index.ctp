<div class="col-md-8">
	<style>
		img{
			width: 20px;
		}
	</style>
	<table>
		<tr>
			<td>Choisissez la date</td>
			<td>
				<?php echo $this->Form->create("",['type'=>'get']); 
				echo $this->Form->control("test",['type'=>'date',
					'minYear' => 2018,
					'maxYear' => date('Y'),
					'label'=> false,

				]);

				
				?>

			</td></tr>

			<tr>
				<td>BULLETIN DE PAIE</td>
				<td>
					<?php 
					echo $this->Form->control("matricule",['label'=>false,'placeholder'=>'entre le no matricule','class'=>'form-control']);

					echo $this->Form->end();
					?>
				</td>

				<td>

					<a onclick="generateLinkBullettin('bullettin.php')">
						<?= $this->Html->image("icon/print.png") ?> </a>
					</td>
				</tr>
				<tr>
					<td>FICHE DE PAIE</td>

					<td>

						<a onclick="generateLink('filePaie.php')">
							<?= $this->Html->image("icon/print.png") ?> </a>
						</td>
					</tr>

					<tr>
						<td>INSS</td>
						<td>
							<a onclick="generateLink('inss.php')">
								<?= $this->Html->image("icon/print.png") ?> </a>
							</td>
							<td>
								<?php
								$options = [
									'1' => 'Première trimestre',
									'4' => 'Deuxième trimestre',
									'7' => 'Troisième trimestre',
									'10' => 'Quatrième trimestre',
								];
								echo $this->Form->select('trimestre', $options , ['class'=>'trimestre']);

								?>
							</td>
							<td>
								<a onclick="generateTrimestrielleLink()">
								<?= $this->Html->image("icon/print.png") ?> </a>
							</td>

						</tr>
						<tr>
							<td>IPR</td>
							<td>
								<a  onclick="generateLink('ipr.php')">
									<?= $this->Html->image("icon/print.png") ?> </a>
								</td>
								<td>
									<a  onclick="generateLink('xcel.html')">
										<?= $this->Html->image("icon/xcel.png") ?> Importer le fichier excelle </a>
									</td>
								</tr>
								<tr>
									<td>MUTUEL</td>
									<td>
										<a onclick="generateLink('mituel.php')">
											<?= $this->Html->image("icon/print.png") ?> </a>
										</td>

									</tr>

									<tr>
										<td>ORDRE DE VIREMENT</td>
										<td>
											<a onclick="generateLink('ordre_virement.php')">
												<?= $this->Html->image("icon/print.png") ?> </a>
											</td>

										</tr>


										<tr>
											<td>REGULARISATION</td>
											<td>
												<a onclick="generateLink('regularisation.php')">
													<?= $this->Html->image("icon/print.png") ?> </a>
												</td>

											</tr>
											<tr>
												<td>AUTRES RETENUS</td>
												<td>
													<a  onclick="generateLink('autre_retenu.php')">
														<?= $this->Html->image("icon/print.png") ?> </a>
													</td>

												</tr>


											</table>
										</div>

										<script>
											let currentDate = new Date();

											let year = currentDate.getFullYear();
											let month = currentDate.getMonth() + 1;
											let link_blank = '../xpdf/';

											$("div.date").change(function(event) {
												/* Act on the event */
												year = this.childNodes[0].value;
												month = this.childNodes[1].value
										//console.log(year + " " + month)
									});

											function generateLink(val){
									// 'Pour les serveurs local../xpdf/'
									link = link_blank +val+"?y="+year+"&m="+month;

									window.open(link,'_blank')
								}

								function generateTrimestrielleLink(){
									let val = $('.trimestre').val()
									link = link_blank  +'inss_trim.php?y='+year+"&m="+val

									window.open(link,'_blank')

								}



								function generateLinkBullettin(val){
									let matricule = $('#matricule').val()

									if(matricule != "" && Number(matricule)>0){
										link = link_blank +val+"?y="+year+"&m="+month+"&matricule="+matricule;
										window.open(link,'_blank')

									}else{
										alert("Entre le numero Matricule valide")
									}
									
								}


							</script>