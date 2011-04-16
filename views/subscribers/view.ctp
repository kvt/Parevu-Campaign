<div class="subscribers view">
<h2><?php  __('Subscriber');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->is_active($subscriber['Subscriber']['active']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Updated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['updated']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Subscriber', true), array('action' => 'edit', $subscriber['Subscriber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Subscriber', true), array('action' => 'delete', $subscriber['Subscriber']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscriber['Subscriber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscribers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscriber', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Blacklists', true), array('controller' => 'blacklists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Blacklist', true), array('controller' => 'blacklists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Subscribers', true), array('controller' => 'users_subscribers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Subscriber', true), array('controller' => 'users_subscribers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Userlists', true), array('controller' => 'userlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Userlist', true), array('controller' => 'userlists', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Lists In User Has Subscribed');?></h3>
	<?php if (!empty($subscriber['Userlist'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('List Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th><?php __('Active'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subscriber['Userlist'] as $userlist):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $userlist['list_name'];?></td>
			<td><?php echo $userlist['created'];?></td>
			<td><?php echo $userlist['updated'];?></td>
			<td><?php echo $html->is_active($userlist['active']);?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'userlists', 'action' => 'view', $userlist['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'userlists', 'action' => 'edit', $userlist['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'userlists', 'action' => 'delete', $userlist['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userlist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New List', true), array('controller' => 'userlists', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
