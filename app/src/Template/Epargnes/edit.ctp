<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Epargne $epargne
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $epargne->id],
                ['confirm' => __('Voulez vous vraiment supprimer # {0}?', $epargne->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listes des  Epargnes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listes des Banques'), ['controller' => 'Banques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nouvel Banque'), ['controller' => 'Banques', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="epargnes form large-9 medium-8 columns content">
    <?=$this->Form->create($epargne)?>
    <fieldset>
        <legend class="text-center"><?=__('Modifier l\' Epargne')?></legend>

        <div class="columns medium-6">
         <?php
echo $this->Form->control('matricule');
echo $this->Form->control('montant');
echo $this->Form->control('id');
 ?>
        </div>
        <div class="columns medium-6">
        <?php
echo $this->Form->control('variable_id', ['options' => $variables]);

echo $this->Form->control('periode',[
    'minYear'=>date('Y'),
    'maxYear'=>date('Y') +1
    ]
    );

echo $this->Form->button(__('Enregistre'));

?>


        </div>


    </fieldset>
    
    <?=$this->Form->end()?>
</div>
