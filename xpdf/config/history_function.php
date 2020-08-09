<?php

// check deleted value




function update_or_create($table,$periode)
{

	$check = "SELECT  IF(count(*)>=1 , 1, 0) as val FROM ".$table." WHERE MONTH(periode) =".$periode['mois'].' AND  YEAR(periode)='.$periode['annee'];


	$delete = 'DELETE FROM '.$table.' WHERE MONTH(`periode`)= '.$periode['mois'] .' AND YEAR(periode) = '.$periode['annee'];

	$db = connexion();
	$check = $db->prepare($check);
	$delete = $db->prepare($delete);

	$check->execute();

	$resultat = $check->fetch();

	$check->closeCursor();

	if($resultat['val']==1){
		$delete->execute();
	}
}


//To check 
// Commment verifier la base pension employer 
// et la base pension employeur


function save_or_update_inss_mensuel($employes)
{
	//Declaration des variables 

	//===================================
	$periode = $employes[0]['periode'];
	$current_periode = $periode['annee'].'-'.$periode['mois'].'-'.'01';

	$query_save = "INSERT INTO `history_inss`(nom, prenom, matricule, matricule_inss, base_pension_employe, montant_pension_employe, base_risque_employe, montant_risque_employe, base_pension_employeur, montant_pension_employeur, base_risque_employeur, montant_risque_employeur, total, periode) VALUES (:nom, :prenom, :matricule, :matricule_inss, :base_pension_employe, :montant_pension_employe, :base_risque_employe, :montant_risque_employe, :base_pension_employeur, :montant_pension_employeur, :base_risque_employeur, :montant_risque_employeur, :total, :periode)";





//Fin =================================================================

	$periode = $employes[0]['periode'];


	update_or_create('history_inss',$periode);


	foreach ($employes as $employe) {

		$bind_data = [
			':nom' => $employe['nom'], 
			':prenom' => $employe['prenom'],
			':matricule' => $employe['matricule'],
			':matricule_inss' => $employe['matricule_inss'],
			':base_pension_employe' => $employe['base_pension_employe'],
			':montant_pension_employe' => $employe['montant_pension_employe'],
			':base_risque_employe' => $employe['base_risque_employe'],
			':montant_risque_employe' => $employe['montant_risque_employe'],
			':base_pension_employeur' => $employe['base_pension_employeur'],
			':montant_pension_employeur' => $employe['montant_pension_employeur'], 
			':base_risque_employeur'=> $employe['base_risque_employeur'],
			':montant_risque_employeur' => $employe['montant_risque_employeur'], 
			':total' => $employe['total'], 
			':periode' => $current_periode
		];

		$db = connexion();

		$requete = $db->prepare($query_save);
		$requete->execute($bind_data);

		unset($db);
		unset($requete);

	}

}


//Enregistrement des donnes du fichier de paie

function save_or_update_file_pay($employes)
{

	$periode = $employes[0]['periode'];
	$current_periode = $periode['annee'].'-'.$periode['mois'].'-'.'01';



	$query_save = "INSERT INTO `history_file_pay`(`matricule`, `nom`, `prenom`, `salaireBase`, `logement`, `ind_deplacement`, `all_familial`, `salaire_brut_sans_ajustement`, `ind_ajustement`, `prime_Fonction`, `brut1`, `pension_employe`, `mutuel_employe`, `base_ipr`, `ipr`, `total_autre_retenu`, `total_retenu`, `net_a_payer`, `pension_employeur`, `mituel_employeur_Patronal`, `total_depenses`,periode) VALUES (
	:matricule,:nom,:prenom,:salaireBase,:logement,:ind_deplacement,:all_familial,:salaire_brut_sans_ajustement,:ind_ajustement,:prime_Fonction,:brut1,:pension_employe,:mutuel_employe,:base_ipr,:ipr,:total_autre_retenu,:total_retenu,:net_a_payer,:pension_employeur,:mituel_employeur_Patronal,:total_depenses,:periode)";


	update_or_create('history_file_pay',$periode);


	foreach ($employes as $employe) {
		# code...

		$bind_data = [

			':matricule' => $employe['matricule'],
			':nom' => $employe['nom'],
			':prenom' => $employe['prenom'],
			':salaireBase' => $employe['salaireBase'],
			':logement' => $employe['logement'],
			':ind_deplacement' => $employe['ind_deplacement'],
			':all_familial' => $employe['all_familial'],
			':salaire_brut_sans_ajustement' => $employe['salaire_brut_sans_ajustement'],
			':ind_ajustement' => $employe['ind_ajustement'],
			':prime_Fonction' => $employe['prime_Fonction'],
			':brut1'=> $employe['brut1'],
			':pension_employe' => $employe['pension_employe'],
			':mutuel_employe' => $employe['mutuel_employe'],
			':base_ipr' => $employe['base_ipr'],
			':ipr' => $employe['ipr'],
			':total_autre_retenu' => $employe['total_autre_retenu'],
			':total_retenu' => $employe['total_retenu'],
			':net_a_payer' =>$employe['net_a_payer'],
			':pension_employeur' => $employe['pension_employeur'],
			':mituel_employeur_Patronal' => $employe['mituel_employeur_Patronal'],
			':total_depenses' => $employe['total_depenses'],
			':periode' => $current_periode


		];

		$db = connexion();

		$requete = $db->prepare($query_save);
		$requete->execute($bind_data);

		unset($db);
		unset($requete);
	}
}



//Save autre retenu


function save_or_update_autre_retenu($employes){
	$periode = $employes[0]['periode'];
	$current_periode = $periode['annee'].'-'.$periode['mois'].'-'.'01';

	$query_save = "INSERT INTO `history_autre_retenue`(`nom`, `prenom`, `matricule`, `montant`, `variable_name`, `periode`) VALUES (:nom,:prenom,:matricule,:montant,:variable_name,:periode)";

	update_or_create('history_autre_retenue',$periode);


	foreach ($employes as $employe) {
		# code...

		$bind_data = [

			':nom'=>$employe['nom'],
			':prenom'=> $employe['prenom'],
			':matricule' => $employe['matricule'],
			':montant' => $employe['montant'],
			':variable_name' => $employe['variable_name'],
			':periode' => $current_periode

		];

		$db = connexion();

		$requete = $db->prepare($query_save);
		$requete->execute($bind_data);

		unset($db);
		unset($requete);


	}

}

function save_or_update_ipr($employes)
{

	$periode = $employes[0]['periode'];
	$current_periode = $periode['annee'].'-'.$periode['mois'].'-'.'01';

	$query_save = "INSERT INTO `history_ipr`(`matricule`, `nom`, `prenom`, `ipr`, `base_ipr`,periode) VALUES (
	:matricule, :nom, :prenom, :ipr, :base_ipr,:periode)";

	update_or_create('history_ipr',$periode);


	foreach ($employes as $employe) {
		# code...
		$bind_data = [

			':nom'=>$employe['nom'],
			':prenom'=> $employe['prenom'],
			':matricule' => $employe['matricule'],
			':ipr' => $employe['ipr'],
			':base_ipr' => $employe['base_ipr'],
			':periode' => $current_periode

		];

		$db = connexion();

		$requete = $db->prepare($query_save);
		$requete->execute($bind_data);

		unset($db);
		unset($requete);



	}

}

// Pour le mituelle
//La function prend en paramatres les donner du mutuelle mensuelle


function save_or_update_mituel($employes)
{
	$periode = $employes[0]['periode'];
	$current_periode = $periode['annee'].'-'.$periode['mois'].'-'.'01';

	$query_save = "INSERT INTO `history_mituel`(`matricule`, `nom`, `prenom`, `base`, `mituel_employeur_Patronal`, `mutuel_employe`, `montant`, `periode`) VALUES (:matricule,:nom,:prenom,:base,:mituel_employeur_Patronal,:mutuel_employe,:montant,:periode)";



	update_or_create('history_mituel',$periode);


	foreach ($employes as $employe) {
		# code...
		$bind_data = [

			':nom'=>$employe['nom'],
			':prenom'=> $employe['prenom'],
			':matricule' => $employe['matricule'],
			':base' => $employe['base'],
			':mituel_employeur_Patronal' => $employe['mituel_employeur_Patronal'],
			':mutuel_employe' => $employe['mutuel_employe'],
			':montant' => $employe['montant'],
			':periode' => $current_periode

		];

		$db = connexion();

		$requete = $db->prepare($query_save);
		$requete->execute($bind_data);

		unset($db);
		unset($requete);



	}

}


//Ordre de virement history


function save_or_update_ordre_virement($employes)
{
	$periode = $employes[0]['periode'];
	$current_periode = $periode['annee'].'-'.$periode['mois'].'-'.'01';

	$query_save = "INSERT INTO `history_ordre_virement`(`compte`, `nom`, `prenom`, `banque_name`, `banque_id`, `montant`,periode) VALUES (:compte,:nom,:prenom,:banque_name,:banque_id,:montant,:periode)";

	update_or_create('history_ordre_virement',$periode);


	foreach ($employes as $employe) {
		# code...
		$bind_data = [
			':compte'=> $employe['compte'],
			':nom'=>$employe['nom'],
			':prenom'=> $employe['prenom'],
			':banque_name'=> $employe['banque_name'],
			':banque_id'=> $employe['banque_id'],
			':montant' => $employe['montant'],
			':periode' => $current_periode

		];

		$db = connexion();

		$requete = $db->prepare($query_save);
		$requete->execute($bind_data);

		unset($db);
		unset($requete);



	}

}

//function regularisation


function get_file_regularisation($employes){
	$periode = $employes[0]['periode'];
	$current_periode = $periode['annee'].'-'.$periode['mois'].'-'.'01';

	$query_save = "INSERT INTO `history_regularisation`( `matricule`, `nom`, `prenom`, `date_embauche`, `ancienete`, `salaire_brut_sans_ajustement`, `ind_ajustement`, `category_name`, `periode`) VALUES (:matricule, :nom, :prenom, :date_embauche, :ancienete, :salaire_brut_sans_ajustement, :ind_ajustement, :category_name, :periode)";

	update_or_create('history_regularisation',$periode);


	foreach ($employes as $employe) {
		# code...
		$bind_data = [
			':matricule'=> $employe['matricule'],
			':nom'=>$employe['nom'],
			':prenom'=> $employe['prenom'],
			':date_embauche'=> $employe['date_embauche'],
			':ancienete'=> $employe['ancienete'],
			':salaire_brut_sans_ajustement' => $employe['salaire_brut_sans_ajustement'],
			':ind_ajustement' => $employe['ind_ajustement'],
			':category_name' => $employe['category_name'],
			':periode' => $current_periode

		];

		$db = connexion();

		$requete = $db->prepare($query_save);
		$requete->execute($bind_data);

		unset($db);
		unset($requete);


	}



}

//Iness trimesrtielle



function save_or_update_iness_trimestrielle($employes)
{
	$periode = $employes[0]['periode'];
	$current_periode = $periode['annee'].'-'.$periode['mois'].'-'.'01';
	
	$query_save = "INSERT INTO `history_inss_trimistrielle`(`nom`, `prenom`, `matricule_inss`, `nbre_mois`, `base_pension_employeur`, `base_risque_employeur`, `motif`,periode) VALUES (:nom, :prenom, :matricule_inss, :nbre_mois, :base_pension_employeur, :base_risque_employeur, :motif, :periode)";

	update_or_create('history_inss_trimistrielle',$periode);

	
	foreach ($employes as $employe) {
		# code...
		$bind_data = [

			':nom' => $employe['nom'], 
			':prenom' => $employe['prenom'], 
			':matricule_inss' =>  $employe['matricule_inss'], 
			':nbre_mois' => $employe['nbre_mois'], 
			':base_pension_employeur' => $employe['base_pension_employeur'], 
			':base_risque_employeur' => $employe['base_risque_employeur'], 
			':motif' => $employe['motif'],
			':periode' => $current_periode 
		];

		$db = connexion();

		$requete = $db->prepare($query_save);
		$requete->execute($bind_data);

		unset($db);
		unset($requete);


	}



}



//function permettant de recupere les historique
// permettant de recuperer dans la table et la periode
// 


function get_historique_from($table,$periode){

	$query = "SELECT * FROM ".$table." WHERE YEAR(periode)=".$periode['annee']." AND MONTH(periode)=".$periode['mois'];

	$db = connexion();

	$resultat = $db->query($query);

	$resultatGet  = $resultat->fetchAll();

	if(count($resultatGet) == 0){
		echo "<h1>Les données du ".$periode['mois']." / ".$periode['annee']." ne sont pas  disponible </h1>";

		die();
	}


	return $resultatGet;
}


//Verification que l'heure du serveur est bien regle

function verifier_heure_regle()
{

	//Verification que la date est bien regler

	$query = "SELECT IF(COUNT(*) > 1,0,1) as resultat FROM `employes_history` WHERE date(created) > NOW()";

	$db = connexion();

	$q = $db->query($query);

	$answer = $q->fetch();

	if($answer['resultat'] == 0){
		echo "<h1> oops!!! <br> Verifier bien que la date du serveur est bien regle 
		car le serveur indique que nous sommes le ". date('Y-m-d') ." Mais il semble que l'heure n'est  pas bien reglé. </h1>";
		die();
	}


}





//La function retourant les valeurs
//Selon le temps 
//Soit la modification ou la leture de l'historique


//Function Iness Trimestrielle

