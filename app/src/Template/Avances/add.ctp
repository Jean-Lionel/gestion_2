<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avance $avance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listes des Avances'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listes des Variables'), ['controller' => 'Variables', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Variable'), ['controller' => 'Variables', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avances form large-9 medium-8 columns content">
    <?= $this->Form->create($avance) ?>
    <fieldset>
        <legend class="text-center"><?= __('Nouvel Avance') ?></legend>

        <div class="columns medium-6">
            <?php
            echo $this->Form->control('matricule');
             echo $this->Form->control('montant');
             echo $this->Form->control('date_avance');
            ?>
            
        </div>

        <div class="columns medium-6">

            <?php

             echo $this->Form->control('periode',['placeholder'=>'Entre le nombre mois ']);

              echo $this->Form->control('variable_id', ['options' => $variables]);

            ?>
            
        </div>
        

          <!--  
            echo $this->Form->control('montant_moi');
            echo $this->Form->control('montant_restant');
           
           
            
            echo $this->Form->control('date_fin');
        ?> -->
    </fieldset>
    <?= $this->Form->button(__('Enregistre')) ?>
    <?= $this->Form->end() ?>
</div>
