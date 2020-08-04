<?php

require_once('./config/getDate.php');
require_once('./config/calcule.php');
$trimestre = intval($_GET['m']);
$annee = intval($_GET['y']);

if(!in_array($trimestre, [1,4,7,10])){
	die('Erreur vos donnés sont incorrect');
}

$employesData = iness_trimestrielle($employes, $trimestre);

function formatTrimestre($trim){
	$trim_list = [0,1,4,7,10];
	$nbre = array_search($trim, $trim_list);
	if (!$nbre)
		return false;

	if ($nbre == 1) 
		return '<span> 1 <sup>ère</sup> Trimestre</span>';
	return '<span>'. ($nbre) .'  <sup> ème </sup> Trimestre</span>';
}
ob_start();
?>

<style>
	table{
		width: 100%;
		font-size: 11px;
	}

	.main-table td,.main-table tr,.main-table {
		border-collapse: collapse;
		border: 1px solid;
		text-align: center;
		font-size: 12px;

	}


	td.noborder{
		border-top: none;
		border-left: none;
		
	}

	.left-text{
		text-align: left;
	}

	.header-table td{
		width: 7%;
		font-weight: bold;
		text-align: center;
	}

	.header-title td,.total td{
		font-weight: bold;
		text-align: center;
	}
	.footer-info p{
		margin-bottom: 0;
	}


</style>

<page backbottom="20mm" footer="page" backright="15mm">

	<?php require("include/footer.php"); ?>

<?php require("include/header_portrait.php");?>

		<u><p style="text-align: center;">INSS <?= formatTrimestre($trimestre). '  '. $annee  ?></p></u>

	
	<table class="main-table">
		
		<tr class="header-title">
			<td colspan="4" class="noborder"></td>
			<td>Pesion</td>
			<td>Risque</td>
			
		</tr>
		<tr class="header-table">
			<td>No</td>
			<td style="width: 30%">Matricule de l'INSS</td>
			<td style="width: 30%">Nom et prénom</td>
			<td style="width: 15%">Nbre de mois</td>
			<td>Base</td>
			<td>Base</td>
		</tr>

		<?php $x=0; foreach ($employesData as $key => $value): ?>
			<tr>
				<td><?= ++$x ?></td>
				<td><?= $value['matricule_inss'] ?></td>
				<td class="left-text"><?= strtoupper($value['nom']).' '. $value['prenom'] ?></td>
				<td><?= afficheNombre($value['nbre_mois']) ?></td>
				<td><?= afficheNombre($value['base_pension_employeur']) ?></td>
				
				<td><?= afficheNombre($value['base_risque_employeur']) ?></td>
				
			</tr>
		<?php endforeach; ?>

		<tr class="total">

		<td colspan="4" class="noborder" style="border-bottom: none;">TOTAL</td>



		<td><?= afficheNombre(count_sum_colonne_table($employesData, 'base_pension_employeur') + 47790);//47410 ?></td>
		
		<td><?= afficheNombre(count_sum_colonne_table($employesData, 'base_risque_employeur')) ?></td>
	
			
		</tr>

	</table>

	<table class="footer-info" style="width: 100%">

		<tr>
			<td style="width: 45%">

				<p>LE DIRECTEUR ADMINISTRATIF ET FINANCIER a.i</p>
				<p>BIGIRIMANA Aline</p>
				
			</td>

			<td style="width: 15%">
				
			</td>

			<td style="width: 40%; ">
				<p style="text-align: right;">LE DIRECTEUR GENERAL</p>
				<p style="text-align: right;">Ir Apollinaire SINDIHEBURA </p>
			</td>
		</tr>
		
	</table>

</page>

<?php

$content = ob_get_clean();


// die($content);

require __DIR__.'/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;
use Spipu\Html2Pdf\Exception\Html2PdfException;
use Spipu\Html2Pdf\Exception\ExceptionFormatter;


$pdf = new Html2Pdf('p','A4','fr','UTF-8'); 
$pdf->writeHTML($content); 
$pdf->Output(); 