<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banque $banque
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Banque'), ['action' => 'edit', $banque->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Banque'), ['action' => 'delete', $banque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banque->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Banques'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banque'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assurances'), ['controller' => 'Assurances', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assurance'), ['controller' => 'Assurances', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employes'), ['controller' => 'Employes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employe'), ['controller' => 'Employes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Epargnes'), ['controller' => 'Epargnes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Epargne'), ['controller' => 'Epargnes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Credits'), ['controller' => 'Credits', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Credit'), ['controller' => 'Credits', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="banques view large-9 medium-8 columns content">
    <h3><?= h($banque->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name','Nom') ?></th>
            <td><?= h($banque->name) ?></td>
        </tr>
    </table>
 
</div>
