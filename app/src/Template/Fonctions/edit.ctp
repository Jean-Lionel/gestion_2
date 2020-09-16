<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Fonction $fonction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fonction->id],
                ['confirm' => __('Voulez vous vraiment supprimer # {0}?', $fonction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listes des Fonctions'), ['action' => 'index']) ?></li>
       <!--  <li><?= $this->Html->link(__('Listes des  Employes'), ['controller' => 'Employes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Employe'), ['controller' => 'Employes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des  Assurances'), ['controller' => 'Assurances', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Assurance'), ['controller' => 'Assurances', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listes des Indeminites'), ['controller' => 'Indeminites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Indeminite'), ['controller' => 'Indeminites', 'action' => 'add']) ?></li> -->
    </ul>
</nav>
<div class="fonctions form large-9 medium-8 columns content">
    <?= $this->Form->create($fonction) ?>
    <fieldset>
        <legend><?= __('Modifier Fonction') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('prime');
            
           //echo $this->Form->control('assurances._ids', ['options' => $assurances]);
            //echo $this->Form->control('indeminites._ids', ['options' => $indeminites]);

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
