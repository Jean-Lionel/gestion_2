<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ancienete $ancienete
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listes des  Ancienetes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listes des Ajustements'), ['controller' => 'Ajustements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Ajustement'), ['controller' => 'Ajustements', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ancienetes form large-9 medium-8 columns content">
    <?= $this->Form->create($ancienete) ?>
    <fieldset>
        <legend><?= __('Add Ancienete') ?></legend>
        <?php
            echo $this->Form->control('debut');
            echo $this->Form->control('fin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
