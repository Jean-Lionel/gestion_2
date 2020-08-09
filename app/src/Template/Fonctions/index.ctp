<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fonction[]|\Cake\Collection\CollectionInterface $fonctions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouvel  Fonction'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des  Employes'), ['controller' => 'Employes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvl Employe'), ['controller' => 'Employes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des  Assurances'), ['controller' => 'Assurances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel  Assurance'), ['controller' => 'Assurances', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des  Indeminites'), ['controller' => 'Indeminites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Indeminite'), ['controller' => 'Indeminites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fonctions index large-9 medium-8 columns content">
    <h3><?= __('Fonctions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id','No') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fonctions as $fonction): ?>
            <tr>
                <td><?= $this->Number->format($fonction->id) ?></td>
                <td><?= h($fonction->name) ?></td>
                <td><?= $this->Number->format($fonction->prime) ?></td>
                <td><?= h($fonction->created) ?></td>
                <td><?= h($fonction->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fonction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fonction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fonction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fonction->id)]) ?>
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
