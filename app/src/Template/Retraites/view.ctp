<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Retraite $retraite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier Retraite'), ['action' => 'edit', $retraite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Retraite'), ['action' => 'delete', $retraite->id], ['confirm' => __('Voulez vous vraiment supprimer # {0}?', $retraite->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lists des Retraites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Retraite'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="retraites view large-9 medium-8 columns content">
    <h3><?= h($retraite->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($retraite->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($retraite->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($retraite->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($retraite->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($retraite->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Actif') ?></th>
            <td><?= $retraite->actif ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
