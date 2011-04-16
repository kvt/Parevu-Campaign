<div class="userlists index">
	<h2><?php __('Userlists');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('list_name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($userlists as $userlist):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $userlist['Userlist']['list_name']; ?>&nbsp;</td>
		<td><?php echo $userlist['Userlist']['description']; ?>&nbsp;</td>
		<td><?php echo $userlist['Userlist']['created']; ?>&nbsp;</td>
		<td><?php echo $userlist['Userlist']['updated']; ?>&nbsp;</td>
		<td><?php echo $userlist['Userlist']['active']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $userlist['Userlist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $userlist['Userlist']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $userlist['Userlist']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userlist['Userlist']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Userlist', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blacklists', true), array('controller' => 'blacklists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blacklist', true), array('controller' => 'blacklists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscribers', true), array('controller' => 'subscribers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscriber', true), array('controller' => 'subscribers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns', true), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign', true), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
