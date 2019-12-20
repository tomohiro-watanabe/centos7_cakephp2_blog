<div class="users form">
<?php echo $this->Form->create('User'); ?>
<<<<<<< HEAD

=======
>>>>>>> origin/master
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
    <?php 
        echo $this->Form->input('username');
        echo $this->Form->input('password');
<<<<<<< HEAD
        // 郵便番号（zipcode)手入力form
        echo $this->Form->input('');
        // zipcode入力後に自動でcity出力されるform
        echo $this->Form->input('');
=======
>>>>>>> origin/master
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
