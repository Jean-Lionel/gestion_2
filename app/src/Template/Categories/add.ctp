<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listes des Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listes des  Ajustements'), ['controller' => 'Ajustements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Ajustement'), ['controller' => 'Ajustements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des  Employes'), ['controller' => 'Employes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Employe'), ['controller' => 'Employes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Ajouter Category') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
