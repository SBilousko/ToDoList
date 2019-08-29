<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title")</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="/css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/9a39ed3abe.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </head>
    <body>
        <div class="container">
            <header class="header">
                <ul class="navigation">
                    <li class="nav-item">
                        <a class="nav-link" href="/" title="All Tasks" focus>All Tasks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/current" title="Current">Current</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="completed" title="Completed">Completed</a>
                    </li>
                </ul>
            </header>
            <main class="main">

                @yield("add-task")

                @yield("content")

            </main>
        </div>
        <script src="/js/script.js"></script>
    </body>
</html>
