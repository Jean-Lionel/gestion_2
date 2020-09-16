<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ZktecoPresance[]|\Cake\Collection\CollectionInterface $zktecoPresance
 */
?>
<nav class="large-2 medium-2 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <div>
            <p class="response-zktecko"></p>
        </div>

        <li>
            <?= $this->Html->link('Raport des presenece', ['action'=>'rapport' ]) ?>
        </li>
    </ul>
</nav>
<div class="zktecoPresance index large-10 medium-10 columns content">
    
    <div class="columns medium-6">
        <h3><?= __('Liste de présence') ?></h3>
    </div>
    <div class="columns medium-6">
        <form action="" method="get">
            <?= $this->Form->control('nom',['label'=>'','default'=> $this->request->query('nom'), 'placeholder'=>'Entre le nom ou prénom']) ?>
        </form>
    </div>

    <table cellpadding="0" cellspacing="0" class="table-striped table-sm">
        <thead>
            <tr>
             <!--    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uid') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('name',"Nom et prénom") ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_day','Date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day_time',"Temps d'arrivé") ?></th>
                
                <!-- <th scope="col"><?= $this->Paginator->sort('Status') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('Verification') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($zktecoPresance as $zktecoPresance): ?>
            <tr>
               <!--  <td><?= $this->Number->format($zktecoPresance->id) ?></td>
                <td><?= $this->Number->format($zktecoPresance->id_number) ?></td>
                <td><?= $this->Number->format($zktecoPresance->uid) ?></td> -->
                
                <td><?= h($zktecoPresance->name) ?></td>
                <td><?= h($zktecoPresance->date_day) ?></td>
                <td><?= $zktecoPresance->day_time->i18nFormat('HH:mm:ss');


                  ?></td>
               <!--  <td><?= h($zktecoPresance->Status) ?></td> -->
                <td><?= h($zktecoPresance->Verification) ?></td>
                <td class="actions">
                  <!--   <?= $this->Html->link(__('afi'), ['action' => 'view', $zktecoPresance->id]) ?> -->
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $zktecoPresance->id]) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $zktecoPresance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $zktecoPresance->id)]) ?>
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


<script>

    

 function save_all_users_logs(){

    let success = true

   $.ajax({
    url: '<?= ZKTECO?>userlogs/',

    type: 'GET',

})
   .done(function(data) {
    //console.log(data);
    $.ajax({
        url: "<?php echo $this->Url->build(['controller'=>'ZktecoPresance','action'=>'userlogs']) ?>",
        headers : {
           'X-CSRF-Token': $('[name="_csrfToken"]').val()
       },
       type : 'POST',
       data : {data}
   }).done(function(response){

    console.log(response);

    console.log("Succes");
    response_zktecko.html(`
        <p style="color:green; background:#fff;">  L'appareil est bien connecté</p>
        `)
})
})
   .fail(function() {
    response_zktecko.html(`

        <p style="color:red;background:#000;">
        ooooops!!!!!!!!!!! <br>
        Viérifier que l' appareil est bien connecté . <br>
        
        </p>

        `)
})
    let response_zktecko = $('.response-zktecko')


   // console.log(response_zktecko);
   // console.log(success);

}
save_all_users_logs();

var x = 0
function hacker(){
    save_all_users_logs()

    setTimeout(()=>{

        console.log(++x);

       // hacker()
    }, 1000)

}

hacker()



</script>