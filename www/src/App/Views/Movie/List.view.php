<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title) ?></title>
    <?= $view->partial('Shared.Style') ?>
</head>
<body class="bg-gray-5 ">
    <? $view->partial('Shared.MainNav') ?>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6">Top Ranked Movies</h1>
        
        <div class="overflow-x-auto shadow-lg">
            <table class="min-w-full bg-white rounded-lg">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="w-1/4 px-4 py-2 text-left">Title</th>
                        <th class="w-1/4 px-4 py-2 text-left">Year</th>
                        <th class="w-1/4 px-4 py-2 text-left">Ranking</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($movies as $movie): ?>
                        <tr class="border-t hover:bg-gray-100">
                            <td class="px-4 py-2"><?= htmlspecialchars($movie['title']) ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($movie['year']) ?></td>
                            <td class="px-4 py-2"><?= htmlspecialchars($movie['ranking'] ?? 'Not available') ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<? $view->partial('Shared.DevFooter') ?>
</html>
