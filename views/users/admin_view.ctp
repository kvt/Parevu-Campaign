<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['phone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['active']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['country']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['state']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zip Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['zip_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns', true), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign', true), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Userlists', true), array('controller' => 'userlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Userlist', true), array('controller' => 'userlists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscribers', true), array('controller' => 'subscribers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscriber', true), array('controller' => 'subscribers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Campaigns');?></h3>
	<?php if (!empty($user['Campaign'])):?>
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
		foreach ($user['Campaign'] as $campaign):
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
<div class="related">
	<h3><?php __('Related Userlists');?></h3>
	<?php if (!empty($user['Userlist'])):?>
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
		foreach ($user['Userlist'] as $userlist):
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
<div class="related">
	<h3><?php __('Related Subscribers');?></h3>
	<?php if (!empty($user['Subscriber'])):?>
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
		foreach ($user['Subscriber'] as $subscriber):
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
