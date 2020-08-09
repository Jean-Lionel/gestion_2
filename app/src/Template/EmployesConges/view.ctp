<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EmployesConge $employesConge
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__(' Modifier Employes en Conge'), ['action' => 'edit', $employesConge->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer Employes en Conge'), ['action' => 'delete', $employesConge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employesConge->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listes des Employes Conges'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Employes Conge'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listes des Employes'), ['controller' => 'Employes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Employe'), ['controller' => 'Employes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listes des Conges'), ['controller' => 'Conges', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Conge'), ['controller' => 'Conges', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employesConges view large-9 medium-8 columns content">
    <h3><?= h($employesConge->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employe') ?></th>
            <td><?= $employesConge->has('employe') ? $this->Html->link($employesConge->employe->id, ['controller' => 'Employes', 'action' => 'view', $employesConge->employe->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Conge') ?></th>
            <td><?= $employesConge->has('conge') ? $this->Html->link($employesConge->conge->name, ['controller' => 'Conges', 'action' => 'view', $employesConge->conge->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employesConge->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Debut Conges') ?></th>
            <td><?= h($employesConge->debut_conges) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fin Conge') ?></th>
            <td><?= h($employesConge->fin_conge) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($employesConge->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($employesConge->modified) ?></td>
        </tr>
    </table>
</div>
