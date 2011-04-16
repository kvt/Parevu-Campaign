<div class="subscribers index">
	<h2><?php __('Subscribers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('activated');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('domain');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($subscribers as $subscriber):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $subscriber['Subscriber']['id']; ?>&nbsp;</td>
		<td><?php echo $subscriber['Subscriber']['first_name']; ?>&nbsp;</td>
		<td><?php echo $subscriber['Subscriber']['last_name']; ?>&nbsp;</td>
		<td><?php echo $subscriber['Subscriber']['email']; ?>&nbsp;</td>
		<td><?php echo $subscriber['Subscriber']['username']; ?>&nbsp;</td>
		<td><?php echo $subscriber['Subscriber']['password']; ?>&nbsp;</td>
		<td><?php echo $subscriber['Subscriber']['activated']; ?>&nbsp;</td>
		<td><?php echo $subscriber['Subscriber']['created']; ?>&nbsp;</td>
		<td><?php echo $subscriber['Subscriber']['domain']; ?>&nbsp;</td>
		<td><?php echo $subscriber['Subscriber']['updated']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $subscriber['Subscriber']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subscriber['Subscriber']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $subscriber['Subscriber']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscriber['Subscriber']['id'])); ?>
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
<?php echo $this->element('subscriber_actions'); ?>
