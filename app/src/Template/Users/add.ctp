
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Listes des Utilisateurs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Ajouter un utilisateur ') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('prenom');
            echo $this->Form->control('telephone');
            echo $this->Form->control('email');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('role',['options'=>['','ADMIN'=>'ADMIN','CHEF DE SERVICE R.H'=>'CHEF DE SERVICE R.H','TRAITANT DU SALAIRE' => 'TRAITANT DU SALAIRE','TRAITANT DE R.H'=>'TRAITANT DE R.H']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enregistré')) ?>
    <?= $this->Form->end() ?>
</div>
