<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ZktecoPresance $zktecoPresance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Zkteco Presance'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="zktecoPresance form large-9 medium-8 columns content">
    <?= $this->Form->create($zktecoPresance) ?>
    <fieldset>
        <legend><?= __('Add Zkteco Presance') ?></legend>
        <?php
            echo $this->Form->control('id_number');
            echo $this->Form->control('uid');
            echo $this->Form->control('date_day', ['empty' => true]);
            echo $this->Form->control('day_time', ['empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('Status');
            echo $this->Form->control('Verification');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
