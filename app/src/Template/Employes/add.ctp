<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employe $employe
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?=__('Actions')?></li>
        <li><?=$this->Html->link(__('Listes des Employes'), ['action' => 'index'])?></li>
        <li><?=$this->Html->link(__('Listes des Niveaux'), ['controller' => 'Levels', 'action' => 'index'])?></li>
        <li><?=$this->Html->link(__('Nouvel Nivea'), ['controller' => 'Levels', 'action' => 'add'])?></li>
        <li><?=$this->Html->link(__('Listes ds Agences'), ['controller' => 'Agences', 'action' => 'index'])?></li>
        <li><?=$this->Html->link(__('Nouvel Agence'), ['controller' => 'Agences', 'action' => 'add'])?></li>
        <li><?=$this->Html->link(__('Listes de Fonctions'), ['controller' => 'Fonctions', 'action' => 'index'])?></li>
        <li><?=$this->Html->link(__('Nouvel Fonction'), ['controller' => 'Fonctions', 'action' => 'add'])?></li>
        <li><?=$this->Html->link(__('Listes des Services'), ['controller' => 'Services', 'action' => 'index'])?></li>
        <li><?=$this->Html->link(__('Nouvel Service'), ['controller' => 'Services', 'action' => 'add'])?></li>
        <li><?=$this->Html->link(__('Listes des Categories'), ['controller' => 'Categories', 'action' => 'index'])?></li>
        <li><?=$this->Html->link(__('Nouvel Category'), ['controller' => 'Categories', 'action' => 'add'])?></li>
        <li><?=$this->Html->link(__('Listes des Banques'), ['controller' => 'Banques', 'action' => 'index'])?></li>
        <li><?=$this->Html->link(__('Nouvel Banque'), ['controller' => 'Banques', 'action' => 'add'])?></li>
        <li><?=$this->Html->link(__('Listes des Cotations'), ['controller' => 'Cotations', 'action' => 'index'])?></li>
        <li><?=$this->Html->link(__('Nouvel Cotation'), ['controller' => 'Cotations', 'action' => 'add'])?></li>
    </ul>
</nav>
<div class="employes form large-10 medium-10 columns content">
    <?=$this->Form->create($employe)?>
    <fieldset>
        <legend class="text-center"><?=__('Ajouter un employé')?></legend>
        <div class="large-6 mediun-6 columns">
            <?php
            echo $this->Form->control('id');
            echo $this->Form->control('matricule',['value'=>$matricule]);
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('dateNaissance', [
                'label' => 'Date de Naissance',
                'minYear' => date('Y') - 70,
                'maxYear' => date('Y') - 18,
            ]);
            echo $this->Form->control('sexe', ['options' => ['', 'H' => 'HOMME', 'F' => 'FEMME']]);
            echo $this->Form->control('etatCivil', ['options' => ['', 'MARIE' => 'MARIE', 'CELIBATAIRE' => 'CELIBATAIRE'],'onchange'=>'changeStatus(this.value)']);
            echo $this->Form->control('level_id', ['options' => $levels, 'label'=>'NIVEAU D \' ETUDE']);

            echo $this->Form->control('conjointFonction', ['options' => ['1' => 'EN FONCTION', '0' => 'PAS DE FONCTION'],'class'=>'conjHide']);
            echo $this->Form->control('telephone');
            echo $this->Form->control('compte');
            ?>

        </div>

        <div class="large-6 medium-6 columns">

            <?php
            echo $this->Form->control('matricule_inss',['label'=>'MATRICULE DE L\' INSS']);
            echo $this->Form->control('email');
            echo $this->Form->control('nombreEnfant',['label'=>'Nombre d\'enfant']);
            echo $this->Form->control('salaireBase',['label' => 'Salaire de base']);
            echo $this->Form->control('agence_id', ['options' => $agences]);
            echo $this->Form->control('fonction_id', ['options' => $fonctions]);
            echo $this->Form->control('service_id', ['options' => $services]);
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('banque_id', ['options' => $banques]);
            echo $this->Form->control('dateEmbauche', [
                'label' => 'Date d\' embauche',
                'minYear' => date('Y'),
                'maxYear' => date('Y'),
            ]);
            ?>
        </div>

    </fieldset>
    <?=$this->Form->button(__('Enregistré'))?>
    <?=$this->Form->end()?>
</div>



<script>

    function changeStatus(val){

        let data = val;
        let nombreenfant = $('#nombreenfant').parent();
        let conjHide = $('.conjHide').parent();

        if(data === 'CELIBATAIRE'){
            nombreenfant.hide();
            conjHide.hide();
        }else{
            nombreenfant.show();
            conjHide.show();
        }

         
    }

</script>