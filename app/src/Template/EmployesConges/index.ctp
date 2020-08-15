<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\EmployesConge[]|\Cake\Collection\CollectionInterface $employesConges
*/
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouvel Employes en Conge'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des Employes'), ['controller' => 'Employes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Employe'), ['controller' => 'Employes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes Conges'), ['controller' => 'Conges', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Conge'), ['controller' => 'Conges', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employesConges index large-10 medium-10 columns content">
    <h3><?= __('Employes Conges') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employe_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('conge_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('debut_conges') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fin_conge') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employesConges as $employesConge): ?>
            <tr>
                <td><?= $this->Number->format($employesConge->id) ?></td>
                <td><?= $employesConge->has('employe') ? $this->Html->link($employesConge->employe->id, ['controller' => 'Employes', 'action' => 'view', $employesConge->employe->id]) : '' ?></td>
                <td><?= $employesConge->has('conge') ? $this->Html->link($employesConge->conge->name, ['controller' => 'Conges', 'action' => 'view', $employesConge->conge->id]) : '' ?></td>
                <td><?= h($employesConge->debut_conges) ?></td>
                <td><?= h($employesConge->fin_conge) ?></td>
              <!--   <td><?= h($employesConge->created) ?></td>
                <td><?= h($employesConge->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Afficher'), ['action' => 'view', $employesConge->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $employesConge->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $employesConge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employesConge->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
