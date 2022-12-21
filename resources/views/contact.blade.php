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
        <h1>Contact Page</h1>
        @foreach ($contacts as $contact)
            <div class="mc-card">
                <h3><span>NAME    :   </span>{{$contact['name']}}</h3>
                <p><span>SURNAME  : </span>{{$contact['surname']}}</p>
                <p><span>EMAIL    :   </span>{{$contact['email']}}</p>
                <p><span>AGE      :     </span>{{$contact['age']}}</p>
            </div>
        @endforeach
        <button>
            <a href="/">HOME PAGE</a>
        </button>
    </div>

</body>
</html>
