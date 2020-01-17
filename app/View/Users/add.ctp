<?php echo $this->element('header')?>

<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
    <?php 
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        // 郵便番号（zipcode)手入力form
        echo $this->Form->input('User.zipcode_id', array('id' => 'id_number', 'type' =>'number'));
        // 自動でcityが出力されるform
        echo $this->Form->input('', array('id' => 'result', 'label' => 'City', 'type' =>'text'));

        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    <?php echo $this->Form->end(__('Submit')); ?>
    </fieldset>
<br>  
<button id="ajax">ボタン</button>
<script>
$(function(){

$('#ajax').on('click',function(){

    $.ajax({
    url: 'http://cakeblog.dev/users/dbconnect',
    type:'POST',
    dataType:'json',
    data:{
        'zipcode' : $('#id_number').val(),
    }
})
/* 通信成功時 */
.done(function(data){
    $('#result').val(data[0].city);
    console.log('通信成功');
    console.log(data);
})
/* 通信失敗時 */
.fail(function(data){
    $('#result').text(data);
    console.log('通信失敗');
    console.log(data);
})
});
});
    

</script>

