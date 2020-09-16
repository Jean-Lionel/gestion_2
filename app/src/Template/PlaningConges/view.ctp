<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlaningConge $planingConge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Planing Conge'), ['action' => 'edit', $planingConge->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Planing Conge'), ['action' => 'delete', $planingConge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planingConge->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Planing Conges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Planing Conge'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employes'), ['controller' => 'Employes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employe'), ['controller' => 'Employes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="planingConges view large-9 medium-8 columns content">
    <h3><?= h($planingConge->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employe') ?></th>
            <td><?= $planingConge->has('employe') ? $this->Html->link($planingConge->employe->fullName, ['controller' => 'Employes', 'action' => 'view', $planingConge->employe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($planingConge->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbre Jour Total') ?></th>
            <td><?= $this->Number->format($planingConge->nbre_jour_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbre Jour 1') ?></th>
            <td><?= $this->Number->format($planingConge->nbre_jour_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nbre Jour 2') ?></th>
            <td><?= $this->Number->format($planingConge->nbre_jour_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Debut Conge 1') ?></th>
            <td><?= h($planingConge->debut_conge_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fin Conge 1') ?></th>
            <td><?= h($planingConge->fin_conge_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Debut Conge 2') ?></th>
            <td><?= h($planingConge->debut_conge_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fin Conge 2') ?></th>
            <td><?= h($planingConge->fin_conge_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($planingConge->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($planingConge->modified) ?></td>
        </tr>
    </table>
</div>
