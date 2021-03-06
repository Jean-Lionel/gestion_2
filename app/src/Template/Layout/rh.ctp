<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->Html->css('monStyle') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script('jquery.js') ?>

    <?= $this->fetch('script') ?>
</head>
<body id="body-content">
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-2 medium-2">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="menu-top" style="background-color: red;">
                <li>
                   <?php echo $this->Html->link('Employées'.
                   $this->Html->image("icon/employee.png"),

                   ['controller'=>'employes','action'=>'index'],
                   ['escape' =>false]
                   ) ?>
               </li>

               <li>
                   <?php 
                   echo $this->Html->link('Fonctions'.
                   $this->Html->image("icon/function.png")
                   ,['controller'=>'fonctions','action'=>'index'],
                   ['escape' => false]
                   ) ?>
               </li>

               <li>
                   <?php echo $this->Html->link('Services'.
                   $this->Html->image("icon/service.png")
                   ,['controller'=>'services','action'=>'index'],
                   ["escape"=>false]
                   ) ?>
               </li>

               <li>
                   <?php echo $this->Html->link('Agences'.
                   $this->Html->image("icon/location.png")
                   ,['controller'=>'agences','action'=>'index'],
                   ["escape"=>false]
                   ) ?>
               </li>

               <li>
                   <?php echo $this->Html->link('Categories'.
                   $this->Html->image("icon/category.png")
                   ,['controller'=>'categories','action'=>'index'],
                   ["escape"=>false]
                   ) ?>
               </li>

               <li>
                   <?php echo $this->Html->link('Ancienetes'.
                   $this->Html->image("icon/old.png")
                   ,['controller'=>'ancienetes','action'=>'index'],
                   ["escape"=>false]
                   ) ?>
               </li>

               <li>
                   <?php echo $this->Html->link('retraites'.
                   $this->Html->image("icon/mise.png")
                   ,['controller'=>'employes','action'=>'retraites'],
                   ["escape" => false]
                   ) ?>
               </li>

               
                <li>
                     <?php echo $this->Html->link('congé'.
                        $this->Html->image('icon/library.png')
                        ,['controller'=>'EmployesConges','action'=>'index'],
                        ['escape'=> false]
                 ) ?>
                </li>
                 <li>
                     <?= $this->Html->link('Planing des congés',['controller'=>'Planing-Conges','action'=>'index']) ?>
                </li>

                 <li>
                     <?= $this->Html->link('Présance',['controller'=>'ZktecoPresance','action'=>'index']) ?>
                </li>


               <li>
                   <?php echo $this->Html->link('Mise à pied'.
                   $this->Html->image("icon/mise.png")
                   ,['controller'=>'misepieds','action'=>'index'],
                   ["escape" => false]
                   ) ?>
               </li>

               <li>
                   <?php echo $this->Html->link('Deconnexion'.
                   $this->Html->image('icon/shutdown.png'),

                   ['controller'=>'users','action'=>'logout'],
                   ['escape'=> false]) ?>
               </li>

           </ul>
       </div>
   </nav>
   <div style="clear: both;">

   </div>

   <?= $this->Flash->render() ?>
   <div class="clearfix">
    <?= $this->fetch('content') ?>
</div>

<script>
    $(document).scroll(function(event) {
        /* Act on the event */
        let scrolllength = parseInt($(window).scrollTop());
        let body = $("#body-content");

        if(scrolllength > 1700){
            body.addClass('fixed-element')
        }

    });


</script>
</body>
</html>
