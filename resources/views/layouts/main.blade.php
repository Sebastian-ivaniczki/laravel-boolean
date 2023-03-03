<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/128/2545/2545715.png" />
    @vite('resources/js/app.js')
    <title>Easter Eggs</title>
</head>

<body>
    @include('/includes.header')
    <main>
        @yield('content')
    </main>


</body>

</html>