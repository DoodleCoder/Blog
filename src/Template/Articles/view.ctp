<body style="background-color:#ccccff;">
<center><h1 style=""><b>The Post : </b></h1>
</br>
<center>
<div class="container" style="background-color:#ffffcc;">
	<div style="margin-left:10%;margin-right:10%;">
	<center>
		<br>
		<h2><u> Title : 	<?= $article->title ?> </u></h2>
		<br>
		<h3><i><u> I.D.</u> : <?= $article->id ?></i></h3>
		<br>
		<h3><i><u> Content</u> : <br><?= $article->body ?></i></h3>
		<br>
		<h3><i><u> Date Created</u> : <br><?= $article->created ?></i></h3>
		<br>
		<h3><i><u> Date Modified</u> : <br><?= $article->modified ?></i></h3>
		<br><BR>

	</div>
	</center>
	</div><br><BR><BR>

<?php
	echo $this->Form->create(null,['url' => ['controller' => 'Comments','action' => 'add']]);
	echo $this->Form->control('Write A Comment', ['rows' => '3','name' => 'content']); 
?>
	<input type="hidden" name="article_id" value='<?= $article->id ?>'>
<?php
	echo $this->Form->button(__('Post Comment'));
	echo $this->Form->end();
?>
<br>
<div style="background-color:pink">
<?php foreach ($article->comments as $comment) : ?>
<h4><?= $comment->user->username   ?></h4>
<h5><?= $comment->content ?></h5>
<br>
<?php endforeach; ?>
</div>
</body>