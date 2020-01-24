<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
    <?php 
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        // 郵便番号（zipcode)手入力form
        echo $this->Form->input('zipcode', array('id' => 'zipcode'));
        // 自動出力されるform
        echo $this->Form->input('pref', array('id' => 'pref'));
        echo $this->Form->input('city', array('id' => 'city'));
        echo $this->Form->input('street', array('id' => 'street'));
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    <?php echo $this->Form->end(__('ユーザー登録')); ?>
    </fieldset>
    <button id="ajax">住所入力</button>
<br>  



<script>
$(function(){

$('#zipcode').on('change', function(){
    let val = $(this).val();
    // 半角数字以外を削除
    val = val.replace(/[^\d]+/g, '');
    $(this).val( val );
  });

$('#ajax').on('click',function(){
    $.ajax({
    url: 'http://cakeblog.dev/users/dbconnect',
    type:'POST',
    dataType:'json',
    data:{
        'zipcode' : $('#zipcode').val(),
    }
    })
    /* 通信成功時 */
    .done(function(data){
    $('#pref').val(data[0].pref);
    $('#city').val(data[0].city);
    $('#street').val(data[0].street);
    console.log('通信成功');
    console.log(data);
    })
    /* 通信失敗時 */
    .fail(function(data){
    $('#result').text(data);
    console.log('通信失敗');
    console.log(data);
    })
})

});
    

</script>

