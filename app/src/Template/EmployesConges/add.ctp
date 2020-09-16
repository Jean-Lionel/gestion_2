<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployesConge $employesConge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listes des Employes en Conges'), ['action' => 'index']) ?></li>
       <!--  <li><?= $this->Html->link(__('Listes des Employes'), ['controller' => 'Employes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Employe'), ['controller' => 'Employes', 'action' => 'add']) ?></li> -->
        <li><?= $this->Html->link(__('Listes des Conges'), ['controller' => 'Conges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Conge'), ['controller' => 'Conges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employesConges form large-9 medium-8 columns content">
    <form action="" method="GET">
        <label for="">Entre le numéro matricule</label>
        <div class="medium-4">
             <?= $this->Form->control("matricule",['label'=>false,'default'=>$this->request->query('matricule'),'placeholder'=>'Entre votre le numéro matricule']); ?>
        </div>

        
    </form>



    <?= $this->Form->create($employesConge) ?>
    <fieldset>
        <legend><?= __('Donner un congé') ?></legend>
        <?php
            echo $this->Form->control('employe_id', ['options' => $employes]);
            echo $this->Form->control('conge_id', ['options' => $conges]);
            echo $this->Form->control('debut_conges');
            echo $this->Form->control('fin_conge');
            echo $this->Form->control('date_retour');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistre')) ?>
    <?= $this->Form->end() ?>
</div>
