<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PlaningConge[]|\Cake\Collection\CollectionInterface $planingConges
 */
?>
<nav class="large-1 medium-1 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nouvel Planfication'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="planingConges index large-11 medium-11 columns content">
    
   
        <div class="columns large-6">
            <h3><?= __('Liste de Planfication des congés') ?></h3>
        </div>
        <div class="columns large-3">
             <form action="" method="get">
            <?= $this->Form->control('matricule',['label'=> false,'default'=>$this->request->query('matricule'),'placeholder'=>'Entre le numero matricule']);  ?>
            </form>
        </div>

        <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               <!--  <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('employe_id','Nom et prénom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nbre_jour_total','Nbre de jrs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('debut_conge_1','Début de congé') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nbre_jour_1','Jours') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fin_conge_1','Fin de conge') ?></th>
                <th scope="col"><?= $this->Paginator->sort('debut_conge_2','Début de congé') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nbre_jour_2','Nbre de jrs') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fin_conge_2','Fin de congé') ?></th>
               <!--  <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions" colspan="2"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($planingConges as $planingConge): ?>
            <tr>
                <!-- <td><?= $this->Number->format($planingConge->id) ?></td> -->
                <td><?= $planingConge->has('employe') ? $this->Html->link($planingConge->employe->fullName, ['controller' => 'Employes', 'action' => 'view', $planingConge->employe->id]) : '' ?></td>
                <td><?= $this->Number->format($planingConge->nbre_jour_total) ?></td>
                <td><?= h($planingConge->debut_conge_1) ?></td>
                <td><?= $this->Number->format($planingConge->nbre_jour_1) ?></td>
                <td><?= h($planingConge->fin_conge_1) ?></td>
                <td><?= h($planingConge->debut_conge_2) ?></td>
                <td><?= $this->Number->format($planingConge->nbre_jour_2) ?></td>
                <td><?= h($planingConge->fin_conge_2) ?></td>
                <!-- <td><?= h($planingConge->created) ?></td> -->
                <!-- <td><?= h($planingConge->modified) ?></td> -->
                <td class="actions" colspan="2">
                   <!--  <?= $this->Html->link(__('View'), ['action' => 'view', $planingConge->id]) ?> -->
                    <?= $this->Html->link(__('Modofier'), ['action' => 'edit', $planingConge->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $planingConge->id], ['confirm' => __('Are you sure you want to delete # {0}?', $planingConge->id)]) ?>
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
