<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Update</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;

            /* text-align: center; */
            background-color: lightblue;
        }

        h2 {
            color: ghostwhite;
        }
    </style>
</head>

<body>
    <h2>Update Data</h2>
    <form action="/db/editData" method="post">
        @csrf
        Posted number <input type="number" name="id" required>
        <input type="submit" value="Data Preview">
    </form>
    <hr>
    @isset($record)
    <form action="/db/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$record->id}}">
        <br>
        Posted user_name <input type="text" name="user_name" value="{{$record->user_name}}"><br>
        Posted news <textarea name="posted_item">{{$record->posted_item}}</textarea><br><br><br>
        <input type="submit" value="Update">
    </form>
    @endisset
</body>

</html>