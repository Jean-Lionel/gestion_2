<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fonction $fonction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Modifier'), ['action' => 'edit', $fonction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $fonction->id], ['confirm' => __('Voulez vous vraimnt supprimer # {0}?', $fonction->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listes des Fonctions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Fonction'), ['action' => 'add']) ?> </li>
        <!-- <li><?= $this->Html->link(__('Listes des Employes'), ['controller' => 'Employes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Employe'), ['controller' => 'Employes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listes des  Assurances'), ['controller' => 'Assurances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Assurance'), ['controller' => 'Assurances', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listes des  Indeminites'), ['controller' => 'Indeminites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nouvel Indeminite'), ['controller' => 'Indeminites', 'action' => 'add']) ?> </li> -->
    </ul>
</nav>
<div class="fonctions view large-9 medium-8 columns content">
    <h3><?= h($fonction->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($fonction->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fonction->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prime') ?></th>
            <td><?= $this->Number->format($fonction->prime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($fonction->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($fonction->modified) ?></td>
        </tr>
    </table>

    <div class="related">
        <h4><?= __('Rapport Employes') ?></h4>
        <?php if (!empty($fonction->employes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Prenom') ?></th>
            </tr>
            <?php foreach ($fonction->employes as $employes): ?>
            <tr>
                <td><?= h($employes->nom) ?></td>
                <td><?= h($employes->prenom) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employes', 'action' => 'view', $employes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employes', 'action' => 'edit', $employes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employes', 'action' => 'delete', $employes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
