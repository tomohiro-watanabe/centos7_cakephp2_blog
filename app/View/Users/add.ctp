<div class="users form">
<?php echo $this->Form->create('User'); ?>

    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
    <?php 
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        // 郵便番号（zipcode)手入力form
        echo $this->Form->input('Zipcode.zipcode', array('type' => 'number'));
        // zipcode入力後に自動でcityが出力されるform
        echo $this->Form->input('zipcode_id', array('label' => 'City'));

        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
