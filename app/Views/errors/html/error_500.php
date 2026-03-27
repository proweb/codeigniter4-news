<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Error 500</title>

 
</head>
<body style="font-size: 140%;font-family: monospace; color: #fff; background-color: #005590;">
	<div class="wrap">
        <h2>Су** опять что то сломалось...</h2>
        <hr>

		<p>
			<?php if (! empty($message) && $message !== '(null)') : ?>
				<?= nl2br(esc($message)) ?>
			<?php else : ?>
				Произошла непредвиденная ошибка.
			<?php endif ?>
		</p>
	</div>
</body>
</html>
