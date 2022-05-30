<?php if (! empty($news) && is_array($news)): ?>

	<?php foreach ($news as $news_item): ?>
	<div class="uk-placeholder">
        <h3><a href="/news/<?= esc($news_item['slug'], 'url') ?>"><?= esc($news_item['title']) ?></a></h3>
		<?= esc($news_item['body']) ?>
		<p><a href="/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>
	</div>


	<?php endforeach ?>

<?php else: ?>

	<h3>No News</h3>

	<p>Unable to find any news for you.</p>

<?php endif ?>
