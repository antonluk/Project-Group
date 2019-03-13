<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Конячая админка</title>
    </head>
    <body>
        <header class="header">
            <h1 id="app">{{ message }}</h1>
            <nav>
                <ul class="menu">
                    <li>Кони</li>
                    <li>Люди</li>
                    <li>Ставки</li>
                </ul>
            </nav>
        </header>
        <main>
            <table></table>
        </main>
        <footer></footer>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script src="js/koni.js"></script>
    </body>
</html>
