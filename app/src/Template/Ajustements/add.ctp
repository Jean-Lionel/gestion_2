<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ajustement $ajustement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listes des Ajustements'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listes des Ancienetes'), ['controller' => 'Ancienetes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Ajouter une Ancienete'), ['controller' => 'Ancienetes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Categorie'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des Indeminites'), ['controller' => 'Indeminites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Indeminite'), ['controller' => 'Indeminites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ajustements form large-9 medium-8 columns content">
    <?= $this->Form->create($ajustement) ?>
    <fieldset>
        <legend><?= __('Add Ajustement') ?></legend>
        <?php
            echo $this->Form->control('ancienete_id', ['options' => $ancienetes]);
            echo $this->Form->control('category_id', ['options' => $categories]);
            //echo $this->Form->control('indeminite_id', ['options' => $indeminites]);
            echo $this->Form->control('prafond');
            echo $this->Form->control('montant');
            //echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
