<div class="subscribers view">
<h2><?php  __('Subscriber');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['id']; ?>
			&nbsp;
		</dd>
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
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Activated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['activated']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Domain'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['domain']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Updated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subscriber['Subscriber']['updated']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<?php echo $this->element('subscriber_actions'); ?>
<div class="related">
	<h3><?php __('Related Blacklists');?></h3>
	<?php if (!empty($subscriber['Blacklist'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Userlist Id'); ?></th>
		<th><?php __('Subscriber Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subscriber['Blacklist'] as $blacklist):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $blacklist['id'];?></td>
			<td><?php echo $blacklist['userlist_id'];?></td>
			<td><?php echo $blacklist['subscriber_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'blacklists', 'action' => 'view', $blacklist['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'blacklists', 'action' => 'edit', $blacklist['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'blacklists', 'action' => 'delete', $blacklist['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $blacklist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Blacklist', true), array('controller' => 'blacklists', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Users Subscribers');?></h3>
	<?php if (!empty($subscriber['UsersSubscriber'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Subscriber Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subscriber['UsersSubscriber'] as $usersSubscriber):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $usersSubscriber['id'];?></td>
			<td><?php echo $usersSubscriber['user_id'];?></td>
			<td><?php echo $usersSubscriber['subscriber_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users_subscribers', 'action' => 'view', $usersSubscriber['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users_subscribers', 'action' => 'edit', $usersSubscriber['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users_subscribers', 'action' => 'delete', $usersSubscriber['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersSubscriber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Users Subscriber', true), array('controller' => 'users_subscribers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Userlists');?></h3>
	<?php if (!empty($subscriber['Userlist'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('List Name'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Display Order'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th><?php __('Activated'); ?></th>
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
			<td><?php echo $userlist['id'];?></td>
			<td><?php echo $userlist['list_name'];?></td>
			<td><?php echo $userlist['user_id'];?></td>
			<td><?php echo $userlist['display_order'];?></td>
			<td><?php echo $userlist['description'];?></td>
			<td><?php echo $userlist['created'];?></td>
			<td><?php echo $userlist['updated'];?></td>
			<td><?php echo $userlist['activated'];?></td>
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
			<li><?php echo $this->Html->link(__('New Userlist', true), array('controller' => 'userlists', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
