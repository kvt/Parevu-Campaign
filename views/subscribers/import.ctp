<div class="subscribers form">
<?php echo $this->Form->create('Subscriber', array('type'=>'post','action'=>'import','enctype'=>'multipart/form-data'));?>
	<fieldset>
 		<legend><?php __('Import Subscriber'); ?></legend>
	<?php
		echo $this->Form->file('csv_file');
		echo $this->Form->input('delimeter');
		echo $this->Form->input('Userlist',array('label'=>'List(Use CTRL key to select multiple)'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php echo $this->element('subscriber_actions'); ?>

