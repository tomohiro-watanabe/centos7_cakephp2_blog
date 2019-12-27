<div class="zipcodes form">
<?php echo $this->Form->create('Zipcode'); ?>
	<fieldset>
		<legend><?php echo __('Add Zipcode'); ?></legend>
	<?php
		echo $this->Form->input('jiscode');
		echo $this->Form->input('zipcode_old');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('pref_kana');
		echo $this->Form->input('city_kana');
		echo $this->Form->input('street_kana');
		echo $this->Form->input('pref');
		echo $this->Form->input('city');
		echo $this->Form->input('street');
		echo $this->Form->input('flag1');
		echo $this->Form->input('flag2');
		echo $this->Form->input('flag3');
		echo $this->Form->input('flag4');
		echo $this->Form->input('flag5');
		echo $this->Form->input('flag6');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Zipcodes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
