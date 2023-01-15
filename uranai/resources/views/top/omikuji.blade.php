<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color:crimson;
            color: ghostwhite;
            text-align: center;
        }

        h2 {
            color: black;
        }
    </style>
</head>

<body>
    <br>
    <p>Today's Fortune is ...</p>
    <h2>{{$result }}</h2>
    <img src="{{asset($path)}}" alt="Paper Fortune's Result">
    <br><br><br>
    <a href="/">Go back to the top page.</a>
</body>

</html>