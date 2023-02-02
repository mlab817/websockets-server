<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .red-text {
                color: red;
            }
        </style>

        <script type="module">
            Echo.channel('home').listen('.NewEvent', (e) => {
                console.log(e.message);
                const messageDiv = document.getElementById("message");
                messageDiv.innerText = e.message;
            })
        </script>
    </head>
    <body class="antialiased">
        <h1 id="message" class="red-text"></h1>
    </body>
</html>
