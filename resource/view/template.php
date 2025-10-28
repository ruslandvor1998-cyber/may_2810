<!DOCTYPE html>
<html lang=""
<head>
    <meta charset="UTF-8">
    <title><?= trans('common.title') ?></title>
    <meta name="description" content="<?= trans('common.meta_description') ?>">
</head>
<body>
<h1><?= trans('common.headline') ?></h1>
<p><?= trans('common.body') ?></p>
<h2><?= trans('common.list_headline') ?></h2>
<ul>
    <?php foreach ($cities as $city): ?>
        <li><?= htmlspecialchars($city['name']) ?></li>
    <?php endforeach; ?>
</ul>
<footer>
    <p><?= trans('common.copyright') ?></p>
</footer>
</body>
</html>