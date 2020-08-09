<?php

$current_date   = ['annee'=>date('Y'),'mois'=>date('m')];

$periodeGet = $current_date;


if(isset($_GET['y'])){
	if(intval($_GET['y']) && intval($_GET['m'])){

	$periodeGet = ['annee'=> $_GET['y'],'mois'=>$_GET['m']];
}

}


//La variable pour avoir la date d'aujourd'hui





