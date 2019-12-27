<div class="zipcodes view">
<h2><?php echo __('Zipcode'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Jiscode'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['jiscode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode Old'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['zipcode_old']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zipcode'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['zipcode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pref Kana'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['pref_kana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City Kana'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['city_kana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street Kana'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['street_kana']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pref'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['pref']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag1'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['flag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag2'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['flag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag3'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['flag3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag4'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['flag4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag5'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['flag5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flag6'); ?></dt>
		<dd>
			<?php echo h($zipcode['Zipcode']['flag6']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Zipcode'), array('action' => 'edit', $zipcode['Zipcode']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Zipcode'), array('action' => 'delete', $zipcode['Zipcode']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $zipcode['Zipcode']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Zipcodes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zipcode'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($zipcode['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Zipcode Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($zipcode['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['role']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['zipcode_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
