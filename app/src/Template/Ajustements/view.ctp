<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ajustement $ajustement
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ajustement'), ['action' => 'edit', $ajustement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Ajustement'), ['action' => 'delete', $ajustement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ajustement->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listes des  Ajustements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Ajustement'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listes des Ancienetes'), ['controller' => 'Ancienetes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Ancienete'), ['controller' => 'Ancienetes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listes des  Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listes des Indeminites'), ['controller' => 'Indeminites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Indeminite'), ['controller' => 'Indeminites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ajustements view large-9 medium-8 columns content">
    <h3><?= h($ajustement->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ancienete') ?></th>
            <td><?= $ajustement->has('ancienete') ? $this->Html->link($ajustement->ancienete->id, ['controller' => 'Ancienetes', 'action' => 'view', $ajustement->ancienete->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $ajustement->has('category') ? $this->Html->link($ajustement->category->name, ['controller' => 'Categories', 'action' => 'view', $ajustement->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ajustement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prafond') ?></th>
            <td><?= $this->Number->format($ajustement->prafond) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant') ?></th>
            <td><?= $this->Number->format($ajustement->montant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ajustement->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($ajustement->modified) ?></td>
        </tr>
    </table>
</div>
