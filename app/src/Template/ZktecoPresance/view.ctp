<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ZktecoPresance $zktecoPresance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Zkteco Presance'), ['action' => 'edit', $zktecoPresance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Zkteco Presance'), ['action' => 'delete', $zktecoPresance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zktecoPresance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Zkteco Presance'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zkteco Presance'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="zktecoPresance view large-9 medium-8 columns content">
    <h3><?= h($zktecoPresance->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($zktecoPresance->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($zktecoPresance->Status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Verification') ?></th>
            <td><?= h($zktecoPresance->Verification) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($zktecoPresance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Number') ?></th>
            <td><?= $this->Number->format($zktecoPresance->id_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uid') ?></th>
            <td><?= $this->Number->format($zktecoPresance->uid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Day') ?></th>
            <td><?= h($zktecoPresance->date_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Day Time') ?></th>
            <td><?= h($zktecoPresance->day_time) ?></td>
        </tr>
    </table>
</div>
