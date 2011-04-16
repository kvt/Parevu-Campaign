<div class="campaigns form">
<?php echo $this->Form->create('Campaign');?>
	<fieldset>
 		<legend><?php __('Admin Add Campaign'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('from');
		echo $this->Form->input('subject');
		echo $this->Form->input('content');
		echo $this->Form->input('user_id');
		echo $this->Form->input('status');
		echo $this->Form->input('Userlist');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>

