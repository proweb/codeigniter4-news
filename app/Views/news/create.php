<?php
?>
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>


<form action="/news/create" method="post">
	<?= csrf_field() ?>
	<div class="uk-margin">
	<label class="uk-form-label" for="title">Title</label>
	<input class="uk-input" type="input" name="title" />
	</div>
	<div class="uk-margin">
	<label class="uk-form-label" for="body">Text</label>
	<textarea class="uk-textarea" name="body" cols="45" rows="4"></textarea>
	</div>
	<div class="uk-margin">
	<input class="uk-button uk-button-primary" type="submit" name="submit" value="Create news item" />
	</div>
</form>
