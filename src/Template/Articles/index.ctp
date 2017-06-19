<style>
table,th,td {
	border: 1px solid black;
}
</style>

<body>
<div>
	<h1><u><b> The list of articles </b></u></h1>
	<button class="btn btn-default" style="float:right"><?= $this->Html->link("Logout", ['controller' => 'Users','action' => 'login'] ) ?></button>
</div>
<br><br><br>
<table style="border=5px;">
	<tr>
		<th><center>Id</center></th>
		<th><center>Title</center></th>
		<th><center>Created</center></th>
		<th colspan=2><center>Action</center></th>
	<?php foreach ($articles as $article) : ?>
		<tr>
			<td><?= $article->id ?></td>
			<td><?= $this->Html->link($article->title, [ 'action' => 'view', $article->id ]) ?></td>
			<td><?= $article->created->format(DATE_RFC850) ?></td>
			<td>
				<?= $this->Html->link('Edit' , ['action' => 'edit', $article->id ]) ?>
			</td>
			<td>
				<?= $this->Form->postLink('Delete' , ['action' => 'delete', $article->id], ['confirm' => 'Are You Sure?']) ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>


<br><br>
<center>
	<button class="btn btn-default"><?= $this->Html->link("Add Article", ['action' => 'add'] ) ?></button>
</center>
</body>