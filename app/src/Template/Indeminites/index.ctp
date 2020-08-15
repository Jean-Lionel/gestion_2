<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Indeminite[]|\Cake\Collection\CollectionInterface $indeminites
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouvel  Indeminite'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des Ajustements'), ['controller' => 'Ajustements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Ajustement'), ['controller' => 'Ajustements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des Fonctions'), ['controller' => 'Fonctions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Fonction'), ['controller' => 'Fonctions', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="indeminites index large-9 medium-8 columns content">
    <h3><?= __('Indeminites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id','No') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_activated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($indeminites as $indeminite): ?>
            <tr>
                <td><?= $this->Number->format($indeminite->id) ?></td>
                <td><?= h($indeminite->name) ?></td>
                <td><?= $this->Number->format($indeminite->is_activated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Afficher'), ['action' => 'view', $indeminite->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $indeminite->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $indeminite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $indeminite->id)]) ?>
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
