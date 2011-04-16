<div class="userlists form">
<?php echo $this->Form->create('Userlist');?>
	<fieldset>
 		<legend><?php __('Edit List'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('list_name');
		echo $this->Form->input('display_order');
		echo $this->Form->input('description');
		echo $this->Form->input('activated', array('label'=>'Active?'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Userlist.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Userlist.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Manage Lists', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subscribers', true), array('controller' => 'subscribers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subscriber', true), array('controller' => 'subscribers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Campaigns', true), array('controller' => 'campaigns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Campaign', true), array('controller' => 'campaigns', 'action' => 'add')); ?> </li>
	</ul>
</div>
