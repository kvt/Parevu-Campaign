<div class="userlists form">
<?php echo $this->Form->create('Userlist');?>
	<fieldset>
 		<legend><?php __('Admin Add Userlist'); ?></legend>
	<?php
		echo $this->Form->input('list_name');
		echo $this->Form->input('user_id');
		echo $this->Form->input('display_order');
		echo $this->Form->input('description');
		echo $this->Form->input('activated');
		echo $this->Form->input('Subscriber');
		echo $this->Form->input('Campaign');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Userlists', true), array('action' => 'index'));?></li>
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