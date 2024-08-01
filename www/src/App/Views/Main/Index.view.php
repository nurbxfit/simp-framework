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
<body  class="bg-white">
    <? $view->partial('Shared.MainNav') ?>
    <div class="flex items-center justify-center text-[#333] p-[50px] bg-white">
        <img width="690" class="rounded-lg" src="/img/logo-no-background.svg"/>
    </div>
</body>
</html>
