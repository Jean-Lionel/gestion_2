<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Epargne $epargne
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier Epargne'), ['action' => 'edit', $epargne->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Epargne'), ['action' => 'delete', $epargne->id], ['confirm' => __('Voulez vous vraiment Supprimer # {0}?', $epargne->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listes des Epargnes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Epargne'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listes des  Banques'), ['controller' => 'Banques', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Banque'), ['controller' => 'Banques', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="epargnes view large-9 medium-8 columns content">
    <h3><?= h($epargne->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Banque') ?></th>
            <td><?= $epargne->has('banque') ? $this->Html->link($epargne->banque->name, ['controller' => 'Banques', 'action' => 'view', $epargne->banque->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Compte') ?></th>
            <td><?= h($epargne->compte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($epargne->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matricule') ?></th>
            <td><?= $this->Number->format($epargne->matricule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant') ?></th>
            <td><?= $this->Number->format($epargne->montant) ?></td>
        </tr>

        <tr>
            <th>Variable</th>
               <td><?= $epargne->has('variable') ? $this->Html->link($epargne->variable->name, ['controller' => 'Variables', 'action' => 'view', $epargne->variable->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periode') ?></th>
            <td><?= h($epargne->periode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($epargne->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($epargne->modified) ?></td>
        </tr>
    </table>
</div>
