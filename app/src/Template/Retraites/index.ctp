<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Retraite[]|\Cake\Collection\CollectionInterface $retraites
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Ajouter Retraite'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="retraites index large-9 medium-8 columns content">
    <h3><?= __('Retraites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id','No') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('actif') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($retraites as $retraite): ?>
            <tr>
                <td><?= $this->Number->format($retraite->id) ?></td>
                <td><?= $this->Number->format($retraite->age) ?></td>
                <td><?= h($retraite->name) ?></td>
                <td><?= h($retraite->actif) ?></td>
                <td><?= h($retraite->created) ?></td>
                <td><?= h($retraite->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Afficher'), ['action' => 'view', $retraite->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $retraite->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $retraite->id], ['confirm' => __('Voulez vous vraiment supprimer # {0}?', $retraite->id)]) ?>
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
