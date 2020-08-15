<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ZktecoPresance[]|\Cake\Collection\CollectionInterface $zktecoPresance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Zkteco Presance'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="zktecoPresance index large-9 medium-8 columns content">
    <h3><?= __('Zkteco Presance') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Verification') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($zktecoPresance as $zktecoPresance): ?>
            <tr>
                <td><?= $this->Number->format($zktecoPresance->id) ?></td>
                <td><?= $this->Number->format($zktecoPresance->id_number) ?></td>
                <td><?= $this->Number->format($zktecoPresance->uid) ?></td>
                <td><?= h($zktecoPresance->date_day) ?></td>
                <td><?= h($zktecoPresance->day_time) ?></td>
                <td><?= h($zktecoPresance->name) ?></td>
                <td><?= h($zktecoPresance->Status) ?></td>
                <td><?= h($zktecoPresance->Verification) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $zktecoPresance->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $zktecoPresance->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $zktecoPresance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zktecoPresance->id)]) ?>
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
