<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>{{$saluto}}</h1>
        @if ($isTrue)
            <p>Condition is True and paragraph is showing </p>
        @endif
        @if (!$isTrue)
            <p>Condition is false and paragraph is showing </p>
        @endif
        <button>

            <a href="/contact">CONTACT PAGE</a>
        </button>
    </div>
</body>
</html>
