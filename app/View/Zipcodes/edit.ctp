<div class="zipcodes form">
<?php echo $this->Form->create('Zipcode'); ?>
	<fieldset>
		<legend><?php echo __('Edit Zipcode'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Zipcode.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Zipcode.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Zipcodes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
