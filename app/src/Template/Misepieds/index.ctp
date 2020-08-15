<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Misepied[]|\Cake\Collection\CollectionInterface $misepieds
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouvel Misepied'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="misepieds index large-10 medium-10 columns content">
    <h3><?= __('Misepieds') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id','No') ?></th>
                <th scope="col"><?= $this->Paginator->sort('matricule') ?></th>
                <th scope="col"><?= $this->Paginator->sort('montant') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($misepieds as $misepied): ?>
            <tr>
                <td><?= $this->Number->format($misepied->id) ?></td>
                <td><?= $this->Number->format($misepied->matricule) ?></td>
                <td><?= $this->Number->format($misepied->montant) ?></td>
    
                <td class="actions">
                    <?= $this->Html->link(__('Afficher'), ['action' => 'view', $misepied->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $misepied->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $misepied->id], ['confirm' => __('Are you sure you want to delete # {0}?', $misepied->id)]) ?>
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
