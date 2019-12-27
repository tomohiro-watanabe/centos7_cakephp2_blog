<div class="zipcodes index">
	<h2><?php echo __('Zipcodes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('jiscode'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode_old'); ?></th>
			<th><?php echo $this->Paginator->sort('zipcode'); ?></th>
			<th><?php echo $this->Paginator->sort('pref_kana'); ?></th>
			<th><?php echo $this->Paginator->sort('city_kana'); ?></th>
			<th><?php echo $this->Paginator->sort('street_kana'); ?></th>
			<th><?php echo $this->Paginator->sort('pref'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('flag1'); ?></th>
			<th><?php echo $this->Paginator->sort('flag2'); ?></th>
			<th><?php echo $this->Paginator->sort('flag3'); ?></th>
			<th><?php echo $this->Paginator->sort('flag4'); ?></th>
			<th><?php echo $this->Paginator->sort('flag5'); ?></th>
			<th><?php echo $this->Paginator->sort('flag6'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($zipcodes as $zipcode): ?>
	<tr>
		<td><?php echo h($zipcode['Zipcode']['id']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['jiscode']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['zipcode_old']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['zipcode']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['pref_kana']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['city_kana']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['street_kana']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['pref']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['city']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['street']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['flag1']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['flag2']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['flag3']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['flag4']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['flag5']); ?>&nbsp;</td>
		<td><?php echo h($zipcode['Zipcode']['flag6']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $zipcode['Zipcode']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $zipcode['Zipcode']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $zipcode['Zipcode']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $zipcode['Zipcode']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Zipcode'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
