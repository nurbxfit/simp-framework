<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $view->partial('Shared.Style')  ?>
    <title><?= htmlspecialchars($code) ?> <?= htmlspecialchars($message) ?></title>
</head>
<body>
    <div class="container">
        <h1><?= htmlspecialchars($code) ?></h1>
        <h2><?= htmlspecialchars($message) ?></h2>
        <p><a href="/">Go to Homepage</a></p>
    </div>
</body>
</html>
