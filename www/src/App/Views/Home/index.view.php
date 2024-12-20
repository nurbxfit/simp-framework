<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?= $view->partial('Shared.Style')  ?>
</head>
<body>
    <? $view->partial('Shared.MainNav') ?>
    <div class="text-[#333] text-center p-[50px]">
        <h1 class="text-[72px]  font-semibold"><?= htmlspecialchars($message) ?></h1>
        <p class="text-[18px] text-[#555]">
            <?= htmlspecialchars($subtext) ?>
        </p>
    </div>
</body>
<? $view->partial('Shared.DevFooter') ?>
</html>