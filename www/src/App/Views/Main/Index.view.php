<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?>
    </title>
    <?= $view->partial('Shared.Style')  ?>
</head>
<body>
    <div class="mx-auto text-center text-[#333] p-[50px]">
        <img src=""/>
        <h1><?= htmlspecialchars($message) ?></h1>

    </div>
</body>
</html>
