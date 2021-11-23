<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        canvas {
            position: fixed;
            top: 0;
            left: 0;
        }

        main {
            position: absolute;
            font-size: 150%;
            color: green;
            font-weight: bold;
        }

        html, body {
            margin: 0;
            height: 100%;
            overflow-x: hidden;
            background-color: black;
        }
    </style>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<canvas id="canvas"></canvas>
<main class="p-12 flex-col justify-start sm:w-2/3">
    <div class="flex">
        <div class="flex-none">
            <img style="height: 200px;" class="p-3 rounded" src="/images/IMG_3084.jpeg" alt="">
        </div>
        <div class="flex-grow">
            <h1>Hi, my name is Laurens van der Bilt</h1>
            <p>I am a learning programmer living in Amsterdam and studying at the Bit Academy.
                My hobbies include programming, gaming and hanging out with friends.</p>
            <br>
            <p>I built this with Laravel and THREE.js</p>
        </div>
    </div>
    <div class="">
        <div class="justify-around">
            <a href="https://github.com/2099492">
                <x-button class="bg-blue-900">GitHub</x-button>
            </a>
            <a href="https://www.linkedin.com/in/laurens-van-der-bilt/">
                <x-button class="bg-blue-900">LinkedIn</x-button>
            </a>
        </div>
    </div>
</main>
<script src="/js/three.js" type="module"></script>
</body>
</html>
