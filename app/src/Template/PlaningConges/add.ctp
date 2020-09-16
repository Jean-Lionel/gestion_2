<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlaningConge $planingConge
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List des Planing des Congés'), ['action' => 'index']) ?></li>
       <!--  <li><?= $this->Html->link(__('List Employes'), ['controller' => 'Employes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employe'), ['controller' => 'Employes', 'action' => 'add']) ?></li> -->
    </ul>
</nav>
<div class="planingConges form large-10 medium-10 columns content">
    <div class="columns large-12" >

        <div class="columns large-4">
            <form action="" method="get">
            <?= $this->Form->control('matricule',['default'=>$this->request->query('matricule')]);  ?>
            </form>
        </div>
        
    </div>

    
    <?= $this->Form->create($planingConge) ?>
    <fieldset>
        <legend><?= __('Planification du Congés') ?></legend>

        <div class="columns medium-12">
            <div class="columns medium-6">
             <?php
            echo $this->Form->control('employe_id', ['options' => $employes]);
            echo $this->Form->control('nbre_jour_total');
            echo $this->Form->control('debut_conge_1');
            echo $this->Form->control('nbre_jour_1'); ?>
        </div>
       
          <div class="columns medium-6">
              <?php
                echo $this->Form->control('fin_conge_1');
            echo $this->Form->control('debut_conge_2');
            echo $this->Form->control('nbre_jour_2');
            echo $this->Form->control('fin_conge_2');
        ?>
          </div>
        </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
