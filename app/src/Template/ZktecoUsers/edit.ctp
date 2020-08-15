<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ZktecoUser $zktecoUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $zktecoUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $zktecoUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Zkteco Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="zktecoUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($zktecoUser) ?>
    <fieldset>
        <legend><?= __('Edit Zkteco User') ?></legend>
        <?php
            echo $this->Form->control('uid');
            echo $this->Form->control('id_number');
            echo $this->Form->control('name');
            echo $this->Form->control('privilege');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
