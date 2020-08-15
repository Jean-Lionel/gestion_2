<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ZktecoUser $zktecoUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Zkteco Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="zktecoUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($zktecoUser) ?>
    <fieldset>
        <legend><?= __('Add Zkteco User') ?></legend>
        <?php
        echo $this->Form->control('uid');
        echo $this->Form->control('id_number');
        echo $this->Form->control('name');
        echo $this->Form->control('privilege');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


<script>



 function save_all_users_logs(){

   $.ajax({
    url: '<?= ZKTECO?>userlogs/',

    type: 'GET',

})
   .done(function(data) {
    $.ajax({
        url: '"<?php echo $this->Url->build(['controller'=>'ZktecoUsers','action'=>'userlogs']) ?>"',
        headers : {
           'X-CSRF-Token': $('[name="_csrfToken"]').val()
       },
       type : 'POST',
       data : {data}
   }).done(function(response){
    console.log(response);
})
})
   .fail(function() {
    console.log("error");
})

}



function save_all_users(){

 $.ajax({
    url: '<?= ZKTECO?>users/',
    type: 'GET',


})
 .done(function(data) {

    $.ajax({
        url : "<?php echo $this->Url->build(['controller'=>'ZktecoUsers','action'=>'save']) ?>" ,
        headers: {
            'X-CSRF-Token': $('[name="_csrfToken"]').val()
        },
        type : 'POST',
        data : {data}
    }).done(function(data){
        console.log(data);
    })

    console.log("success");
})
 .fail(function() {
    console.log("error");
})


}

save_all_users();

</script>
