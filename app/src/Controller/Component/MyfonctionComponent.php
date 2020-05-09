<?php

namespace App\Controller\Component;

use Cake\Controller\Component;

class MyfonctionComponent extends Component
{
	public function add_date($givendate,$mth=0,$day=0,$yr=0) {
		$cd = strtotime($givendate);
		$newdate = date('Y-m-01', 
			mktime(date('h',$cd),
				date('i',$cd),
				date('s',$cd), 
				date('m',$cd)+$mth,
				date('d',$cd)+$day, date('Y',$cd)+$yr));
		return $newdate;
	}

	public function returnTodayStartDay($dateString){
		$tabVal = explode('-', $dateString);
		$tabVal[2] = '01';

		return implode('-', $tabVal);
	}

	public function doComplexOperation($amount1, $amount2)
	{
		return $amount1 + $amount2;
	}

	public function nbreAge($dateNaissance){
		$datetime1 = date_create($dateNaissance);
		$datetime2 = date_create(date("Y-m-d"));
		$interval = date_diff($datetime1, $datetime2);

		$infoComplet = $interval->format('%r%y  ans - %M mois  - %D jours');

		$annerestant = 60 - $interval->format('%r%y');

		return [$infoComplet, $annerestant];
	}


	
	  // echo $this->Form->control('role',['options'=>['','ADMIN'=>'ADMIN','CHEF DE SERVICE R.H'=>'CHEF DE SERVICE R.H','TRAITANT DU SALAIRE' => 'TRAITANT DU SALAIRE','TRAITANT DE R.H'=>'TRAITANT DE R.H']]);

	public function renderLayout($user_role){

		$admin = ['ADMIN', 'CHEF DE SERVICE R.H'];

		if (in_array($user_role, $admin)) {

			//Si le role de l'utilisateur est un admnistrateur on retoune le default.ctp
			return 'default';
		}

		//son role est traitant du salaire on lui donner directement le layout d'un Salaire.ctp 

		if($user_role == 'TRAITANT DU SALAIRE')
			return 'salaire';


		if($user_role == 'TRAITANT DE R.H')
			return 'rh';
		else
			return null;

	}



}