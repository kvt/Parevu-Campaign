<div class="subscribers form">
<?php echo $this->Form->create('Subscriber');?>
	<fieldset>
 		<legend><?php __('Edit Subscriber'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php echo $this->element('subscriber_actions'); ?>
