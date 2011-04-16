<?php  
echo $javascript->link('ckeditor/ckeditor.js');
?>
<div class="campaigns form">
<?php echo $this->Form->create('Campaign');?>
	<fieldset>
 		<legend><?php __('Add Campaign'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('from');
		echo $this->Form->input('subject');
		echo $this->Form->input('content');
		echo $fck->load('Campaign.content'); 
		echo $this->Form->input('user_id');
		echo $this->Form->input('status');
		echo $this->Form->input('Userlist');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Campaigns', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Userlists', true), array('controller' => 'userlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Userlist', true), array('controller' => 'userlists', 'action' => 'add')); ?> </li>
	</ul>
</div>
