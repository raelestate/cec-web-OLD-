<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Casino Español de Cebu</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>

</head>

<body class="min-h-screen font-mono">
    <style>
        /* * {
            border: solid 1px red;
        } */

        body {
            background: rgb(2, 0, 36);
            background: -moz-linear-gradient(338deg, rgba(2, 0, 36, 1) 0%, rgba(22, 67, 101, 1) 29%, rgba(27, 27, 51, 1) 100%);
            background: -webkit-linear-gradient(338deg, rgba(2, 0, 36, 1) 0%, rgba(22, 67, 101, 1) 29%, rgba(27, 27, 51, 1) 100%);
            background: linear-gradient(338deg, rgba(2, 0, 36, 1) 0%, rgba(22, 67, 101, 1) 29%, rgba(27, 27, 51, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#020024", endColorstr="#1b1b33", GradientType=1);
        }
    </style>
    <x-navbar>

    </x-navbar>

    <header>
        <div class="container mx-auto">{{ $heading }}</div>
    </header>
    <main>

        <div class="container mx-auto">{{ $slot }}</div>

    </main>
    <div class="pt-40">
        <x-footer>
        </x-footer>
    </div>

</body>
