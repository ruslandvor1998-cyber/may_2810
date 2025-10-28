<!DOCTYPE html>
<html lang=""
<head>
    <meta charset="UTF-8">
    <title><?= trans('title') ?></title>
    <meta name="description" content="<?= trans('meta_description') ?>">
</head>
<body>
<h1><?= trans('headline') ?></h1>
<p><?= trans('body') ?></p>
<h2><?= trans('list_headline') ?></h2>
<ul>
    <?php foreach ($cities as $city): ?>
        <li><?= htmlspecialchars($city['name']) ?></li>
    <?php endforeach; ?>
</ul>
<footer>
    <p><?= trans('copyright') ?></p>
</footer>
</body>
</html>