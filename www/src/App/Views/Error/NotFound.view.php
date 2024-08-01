<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $view->partial('Shared.Style') ?>
    <title><?= htmlspecialchars($code) ?> <?= htmlspecialchars($message) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full text-center">
        <h1 class="text-6xl font-bold text-red-500"><?= htmlspecialchars($code) ?></h1>
        <h2 class="text-3xl font-semibold text-gray-800 mt-4"><?= htmlspecialchars($message) ?></h2>
        <p class="mt-6 text-lg">
            <a href="/" class="text-blue-500 hover:underline">Go to Homepage</a>
        </p>
    </div>
</body>
</html>
