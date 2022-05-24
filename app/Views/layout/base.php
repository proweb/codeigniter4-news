<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= esc($title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $this->renderSection("head"); ?>
</head>
<?= $this->renderSection("content"); ?>
<?= $this->renderSection("footer"); ?>
<body>
</html>
