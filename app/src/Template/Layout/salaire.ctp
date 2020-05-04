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
                     echo $this->Html->link('Banques'.
                        $this->Html->image("icon/banque.png")
                        ,['controller'=>'banques','action'=>'index'],
                        ["escape" => false]
                    ) ?>
                </li>
               

                <li>
                     <?php echo $this->Html->link('Ajustements'.
                        $this->Html->image("icon/balance.png")
                     ,['controller'=>'ajustements','action'=>'index'],
                     ["escape"=>false]
                 ) ?>
                </li>


                <li>
                     <?php echo $this->Html->link(
                        'Epargnes'.
                          $this->Html->image("icon/epargnes.png")
                        ,['controller'=>'epargnes','action'=>'index'],
                        ['escape'=>false]
                 ) ?>
                </li>
                <li>
                     <?php echo $this->Html->link('Crédit'.
                        $this->Html->image("icon/credit.png"),
                     ['controller'=>'credits','action'=>'index'],
                     ['escape' => false]
                 ) 
                     ?>
                </li>

                <li>
                     <?php echo $this->Html->link('Assurances'.
                        $this->Html->image('icon/asssurance.png')
                     ,['controller'=>'assurances','action'=>'index'],
                     ['escape' => false]
                 ) ?>
                </li>
                 <li>
                     <?php echo $this->Html->link('Avances'.
                        $this->Html->image('icon/avances.png')
                        ,['controller'=>'avances','action'=>'index'],
                        ['escape'=> false]
                 ) ?>
                </li>
              
                <li>
                     <?php echo $this->Html->link('Annexes'.
                        $this->Html->image('icon/library.png')
                        ,['controller'=>'Menus','action'=>'index'],
                        ['escape'=> false]
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

        
            // let link = window.location.href.split('/');
            // let currentVal = link.pop();
            // let a = $('a[href*='+currentVal+']')

            // a.addClass('');

     
    </script>
</body>
</html>
