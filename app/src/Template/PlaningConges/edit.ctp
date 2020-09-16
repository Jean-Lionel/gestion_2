<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlaningConge $planingConge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $planingConge->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $planingConge->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Planing Conges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employes'), ['controller' => 'Employes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employe'), ['controller' => 'Employes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planingConges form large-9 medium-8 columns content">
    <?= $this->Form->create($planingConge) ?>
    <fieldset>
        <legend><?= __('Edit Planing Conge') ?></legend>
        <?php
            echo $this->Form->control('employe_id', ['options' => $employes]);
            echo $this->Form->control('nbre_jour_total');
            echo $this->Form->control('debut_conge_1');
            echo $this->Form->control('nbre_jour_1');
            echo $this->Form->control('fin_conge_1');
            echo $this->Form->control('debut_conge_2');
            echo $this->Form->control('nbre_jour_2');
            echo $this->Form->control('fin_conge_2');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
