<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployesConge $employesConge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employes Conges'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employes'), ['controller' => 'Employes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employe'), ['controller' => 'Employes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Conges'), ['controller' => 'Conges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Conge'), ['controller' => 'Conges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employesConges form large-9 medium-8 columns content">
    <?= $this->Form->create($employesConge) ?>
    <fieldset>
        <legend><?= __('Add Employes Conge') ?></legend>
        <?php
            echo $this->Form->control('employe_id', ['options' => $employes]);
            echo $this->Form->control('conge_id', ['options' => $conges]);
            echo $this->Form->control('debut_conges');
            echo $this->Form->control('fin_conge');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
