<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ajustement[]|\Cake\Collection\CollectionInterface $ajustements
 */
?>
<nav class="large-1 medium-1 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouvel Ajustement'), ['action' => 'add']) ?></li>
 <!--        <li><?= $this->Html->link(__('Listes des Ancienetes'), ['controller' => 'Ancienetes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Ancienete'), ['controller' => 'Ancienetes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des Indeminites'), ['controller' => 'Indeminites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Indeminite'), ['controller' => 'Indeminites', 'action' => 'add']) ?></li> -->
    </ul>
</nav>
<div class="ajustements index large-11 medium-11 columns content">
    <h3><?= __('Ajustements') ?></h3>
    <table table table-responsive>
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id','No') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ancienete_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prafond') ?></th>
                <th scope="col"><?= $this->Paginator->sort('montant') ?></th>
            
                <th scope="col" class="actions" colspan="2"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ajustements as $ajustement): ?>
            <tr>
                <td><?= $this->Number->format($ajustement->id) ?></td>
                <td><?= $ajustement->has('ancienete') ? $this->Html->link($ajustement->ancienete->debut ." - ". $ajustement->ancienete->fin , ['controller' => 'Ancienetes', 'action' => 'view', $ajustement->ancienete->id]) : '' ?></td>
                <td><?= $ajustement->has('category') ? $this->Html->link($ajustement->category->name, ['controller' => 'Categories', 'action' => 'view', $ajustement->category->id]) : '' ?></td>
                <td><?= $this->Number->format($ajustement->prafond) ?></td>
                <td><?= $this->Number->format($ajustement->montant) ?></td>

                <td class="actions" colspan="2">
                    <?= $this->Html->link(__('Affiche'), ['action' => 'view', $ajustement->id]) ?>
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $ajustement->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $ajustement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ajustement->id)]) ?>
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
