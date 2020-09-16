<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employe[]|\Cake\Collection\CollectionInterface $employes
 */
?>

<style>
    .actions img{
        width: 25px;
    }
</style>
<!-- <nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouvel Employé'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Levels'), ['controller' => 'Levels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Level'), ['controller' => 'Levels', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agences'), ['controller' => 'Agences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agence'), ['controller' => 'Agences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fonctions'), ['controller' => 'Fonctions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fonction'), ['controller' => 'Fonctions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Banques'), ['controller' => 'Banques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banque'), ['controller' => 'Banques', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cotations'), ['controller' => 'Cotations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cotation'), ['controller' => 'Cotations', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="employes index large-12 medium-12 columns content">
    <div class="columns medium-6">
       <!--  <h3><?= __('LISTE DES EMPLOYES PRET A PARTITR EN RETRAITE') ?></h3> -->
    </div>
    
    <div class="columns medium-4">
        <?= $this->Form->create("",['type'=>'get']); ?>
        <div class="row">
           <div class="medium-5 columns">
               <?= $this->Form->control("champ",[
                'options'=>[
                    'matricule' => 'matricule',
                    'nom' => 'nom'
                    ,'prenom' => 'prénom'
                ],
                'label'=> false,
                'default'=>$this->request->query('champ') 
            ]); ?>

        </div>

        <div class="medium-7 columns">
            <?= $this->Form->control("keyWord",['label'=>false,'default'=>$this->request->query('keyWord'),'placeholder'=>'Entre votre mot de rechercher']); ?>
        </div>
        
    </div>
    <?= $this->Form->end(); ?>
</div>

<div class="medium-12 columns" >
    <div class="medium-7 columns">

        <table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id','No') ?></th>
            <th scope="col"><?= $this->Paginator->sort('matricule') ?></th>
            <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
            <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
            <th scope="col"><?= $this->Paginator->sort('dateNaissance','Date de naissance') ?></th>
            <th scope="col">Année avant la retraite</th>
            <th scope="col">Age</th>

             </tr>
         </thead>
         <tbody>
            <?php foreach ($employes as $key => $employe): ?>
                <tr>
                    <td><?= ++$key ?></td>
                    <td><?= $this->Number->format($employe['matricule']) ?></td>
                    <td><?= h(strtoupper($employe['nom'])) ?></td>
                    <td><?= h(ucfirst($employe['prenom'])) ?></td>
                    <td><?= h($employe['dateNaissance']) ?></td>
                    <td>
                        <?php 
                        if($employe['anneeRestant'] < 2 ) {

                            echo '<span style="background: red; width:200px;">'.$employe['anneeRestant'].'</span>
';
                        }else{
                            echo $employe['anneeRestant'];
                        }

                            
                            
                        ?>
                    </td>
                    <td><?= h($employe['nbresAnne']) ?></td>
                    
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>


    
    </div>
    <div class="medium-5 columns">
        
        <h5>Les candidants à la retraites</h5>

        <table>
            <thead>
                <tr>
                    <th>Matricule</th>

                    <th>Nom et Prénom</th>
                    <th>Années Restantes</th>
                </tr>
            </thead>

            <tbody>

      <!--           "matricule" => "29"
    "nom" => "SINDAYIHEBURA"
    "prenom" => "Astère"
    "dateNaissance" => "1952-05-12"
    "nbresAnne" => "68  ans - 03 mois  - 26 jours"
    "anneeRestant" => -8 -->
                

                <?php foreach($employes_anne_restant as $employe): ?>
                    <tr>
                        <td><?= $employe['matricule'] ?></td>
                        <td><?= $employe['nom'].' '.$employe['prenom'] ?></td>
                        <td><?= $employe['anneeRestant'] ?></td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>


    </div>
</div>





</div>
