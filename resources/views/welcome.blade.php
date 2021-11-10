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
            font-size: 200%;
            color: green;
            font-weight: bold;
            max-width: 50%;
        }
    </style>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<canvas id="canvas"></canvas>
    <main class="p-12">
    <header>
        <h1>Laurens van der Bilt</h1>
    </header>
    <p>I am a learning programmer living in Amsterdam and studying at the bit-academy.
        My hobbies include programming, gaming and hanging out with friends.</p>
    <br>
    <p>I built this with Laravel and THREE.js</p>
    <div class="flex justify-start">
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
