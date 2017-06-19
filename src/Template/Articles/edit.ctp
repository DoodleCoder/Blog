<h1>
	Edit Article
</h1>
<?php 
	echo $this->Form->create($article);
	echo $this->Form->control('title');
	echo $this->Form->control('body', ['rows' => '3'] ); ?>
	<center>
	<?php echo $this->Form->button(__('Save Article')); ?>
	</center>
	<?php
	echo $this->Form->end();
?>