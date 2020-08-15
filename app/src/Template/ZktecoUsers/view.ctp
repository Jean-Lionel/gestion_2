<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ZktecoUser $zktecoUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Zkteco User'), ['action' => 'edit', $zktecoUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Zkteco User'), ['action' => 'delete', $zktecoUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zktecoUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Zkteco Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Zkteco User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="zktecoUsers view large-9 medium-8 columns content">
    <h3><?= h($zktecoUser->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($zktecoUser->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Privilege') ?></th>
            <td><?= h($zktecoUser->privilege) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($zktecoUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uid') ?></th>
            <td><?= $this->Number->format($zktecoUser->uid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Number') ?></th>
            <td><?= $this->Number->format($zktecoUser->id_number) ?></td>
        </tr>
    </table>
</div>
