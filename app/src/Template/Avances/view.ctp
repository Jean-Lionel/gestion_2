<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avance $avance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier Avance'), ['action' => 'edit', $avance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Avance'), ['action' => 'delete', $avance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avance->id)]) ?> </li>
        <li><?= $this->Html->link(__('Liste des Avances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Avance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listes des Variables'), ['controller' => 'Variables', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Variable'), ['controller' => 'Variables', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avances view large-9 medium-8 columns content">
    <h3><?= h($avance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Compte') ?></th>
            <td><?= h($avance->compte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Variable') ?></th>
            <td><?= $avance->has('variable') ? $this->Html->link($avance->variable->name, ['controller' => 'Variables', 'action' => 'view', $avance->variable->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($avance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matricule') ?></th>
            <td><?= $this->Number->format($avance->matricule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant Moi') ?></th>
            <td><?= $this->Number->format($avance->montant_moi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant Restant') ?></th>
            <td><?= $this->Number->format($avance->montant_restant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant') ?></th>
            <td><?= $this->Number->format($avance->montant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periode') ?></th>
            <td><?= $this->Number->format($avance->periode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($avance->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($avance->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Avance') ?></th>
            <td><?= h($avance->date_avance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Fin') ?></th>
            <td><?= h($avance->date_fin) ?></td>
        </tr>
    </table>
</div>
