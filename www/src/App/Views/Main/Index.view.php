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
    <div class="flex flex-col items-center justify-center text-gray-800 p-10 bg-white  rounded-lg mt-10 mx-4 md:mx-10 lg:mx-20">
        <img width="690" class="rounded-lg shadow-md p-4" src="/img/logo-no-background.svg" alt="Framework Logo"/>
        <h1 class="text-4xl font-extrabold mt-6 mb-4 text-center">Welcome to SIMP ( Simple MVC PHP ) Framework</h1>
        <p class="text-lg mb-6 text-center">
            A simple MVC PHP Framework, using vanilla PHP with zero external dependencies. Help start your project with a clean structure and proper routing, moving beyond traditional file-based routing.
        </p>
        <div class="flex flex-col md:flex-row gap-4">
            <a href="https://github.com/your-repository" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-blue-600 transition duration-300 ease-in-out" target="_blank">GitHub</a>
            <a href="/docs" class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-green-600 transition duration-300 ease-in-out">Documentation</a>
        </div>
    </div>
</body>
<? $view->partial('Shared.DevFooter') ?>
</html>
