<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agence $agence
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agence->id],
                ['confirm' => __('Etez-vous sur de supprimer# {0}?', $agence->name)]
            )
        ?></li>
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listes des agences'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listes des Employes'), ['controller' => 'Employes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel employe'), ['controller' => 'Employes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agences form large-9 medium-8 columns content">
    <?= $this->Form->create($agence) ?>
    <fieldset>
        <legend><?= __('Edit Agence') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
