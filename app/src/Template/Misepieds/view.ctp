<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Misepied $misepied
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier Misepied'), ['action' => 'edit', $misepied->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Misepied'), ['action' => 'delete', $misepied->id], ['confirm' => __('Voulez vous vraiment supprimer # {0}?', $misepied->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listes des Misepieds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Misepied'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="misepieds view large-9 medium-8 columns content">
    <h3><?= h($misepied->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Motif') ?></th>
            <td><?= h($misepied->motif) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($misepied->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Matricule') ?></th>
            <td><?= $this->Number->format($misepied->matricule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant') ?></th>
            <td><?= $this->Number->format($misepied->montant) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($misepied->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($misepied->modified) ?></td>
        </tr>
    </table>
</div>
