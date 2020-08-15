<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ZktecoUser[]|\Cake\Collection\CollectionInterface $zktecoUsers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Zkteco User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="zktecoUsers index large-9 medium-8 columns content">
    <h3><?= __('Zkteco Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('privilege') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($zktecoUsers as $zktecoUser): ?>
            <tr>
                <td><?= $this->Number->format($zktecoUser->id) ?></td>
                <td><?= $this->Number->format($zktecoUser->uid) ?></td>
                <td><?= $this->Number->format($zktecoUser->id_number) ?></td>
                <td><?= h($zktecoUser->name) ?></td>
                <td><?= h($zktecoUser->privilege) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $zktecoUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $zktecoUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $zktecoUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zktecoUser->id)]) ?>
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
