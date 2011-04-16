<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Import Subscribers', true), array('action' => 'import'));?></li>
		<li><?php echo $this->Html->link(__('List Subscribers', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Manage Lists', true), array('controller' => 'userlists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New List', true), array('controller' => 'userlists', 'action' => 'add')); ?> </li>
	</ul>
</div>
