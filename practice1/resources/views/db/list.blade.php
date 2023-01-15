<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            /* color: ghostwhite; */
            text-align: center;
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <br>
    <h2>全件表示</h2>
    <br>
    <a href="/">戻る</a>
    <br><br><table class="table">
        <tr>
            <th>ID</th>
            <th>品名</th>
            <th>価格</th>
        </tr>
        @foreach($records as $record)
        <tr>
            <td>{{$record->id}}</td>
            <td>{{$record->name}}</td>
            <td>{{$record->price}}</td>
        </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>