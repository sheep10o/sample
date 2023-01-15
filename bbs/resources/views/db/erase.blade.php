<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Delete</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            /* color: ghostwhite; */
            /* text-align: center; */
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <h2>Data Delete</h2>

    <form action="/db/eraseData" method="post">
        @csrf
        Posted number <input type="number" name="id" required>
        <!-- <br> -->
        <input type="submit" value="Data Preview">
    </form>
    <hr>
    @isset($record)
    <form action="/db/delete" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$record ->id}}" readonly> <br>
        Posted name <input type="text" name="user_name" value="{{$record ->user_name}}" readonly> <br><br>
        Posted news <textarea name="posted_item" readonly>{{$record ->posted_item}}</textarea><br><br><br>
        <input type="submit" value="Delete">
    </form>
    @endisset
</body>

</html>