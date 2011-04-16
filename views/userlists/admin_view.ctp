<div class="userlists view">
<h2><?php  __('Userlist');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userlist['Userlist']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('List Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userlist['Userlist']['list_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($userlist['User']['username'], array('controller' => 'users', 'action' => 'view', $userlist['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Display Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userlist['Userlist']['display_order']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userlist['Userlist']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userlist['Userlist']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Updated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userlist['Userlist']['updated']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Activated'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $userlist['Userlist']['activated']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Userlist', true), array('action' => 'edit', $userlist['Userlist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Userlist', true), array('action' => 'delete', $userlist['Userlist']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $userlist['Userlist']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Userlists', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Userlist', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Blacklists');?></h3>
	<?php if (!empty($userlist['Blacklist'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Userlist Id'); ?></th>
		<th><?php __('Subscriber Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userlist['Blacklist'] as $blacklist):
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
	<h3><?php __('Related Subscribers');?></h3>
	<?php if (!empty($userlist['Subscriber'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Activated'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Domain'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userlist['Subscriber'] as $subscriber):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subscriber['id'];?></td>
			<td><?php echo $subscriber['first_name'];?></td>
			<td><?php echo $subscriber['last_name'];?></td>
			<td><?php echo $subscriber['email'];?></td>
			<td><?php echo $subscriber['username'];?></td>
			<td><?php echo $subscriber['password'];?></td>
			<td><?php echo $subscriber['activated'];?></td>
			<td><?php echo $subscriber['created'];?></td>
			<td><?php echo $subscriber['domain'];?></td>
			<td><?php echo $subscriber['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'subscribers', 'action' => 'view', $subscriber['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'subscribers', 'action' => 'edit', $subscriber['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'subscribers', 'action' => 'delete', $subscriber['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subscriber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subscriber', true), array('controller' => 'subscribers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Campaigns');?></h3>
	<?php if (!empty($userlist['Campaign'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('From'); ?></th>
		<th><?php __('Subject'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Updated'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($userlist['Campaign'] as $campaign):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $campaign['id'];?></td>
			<td><?php echo $campaign['title'];?></td>
			<td><?php echo $campaign['from'];?></td>
			<td><?php echo $campaign['subject'];?></td>
			<td><?php echo $campaign['content'];?></td>
			<td><?php echo $campaign['user_id'];?></td>
			<td><?php echo $campaign['status'];?></td>
			<td><?php echo $campaign['created'];?></td>
			<td><?php echo $campaign['updated'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'campaigns', 'action' => 'view', $campaign['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'campaigns', 'action' => 'edit', $campaign['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'campaigns', 'action' => 'delete', $campaign['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $campaign['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Campaign', true), array('controller' => 'campaigns', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
