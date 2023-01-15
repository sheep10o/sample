<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの検索</title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        span {
            color: crimson;
            font-weight: bold;
        }

        body {
            width: 600px;
            margin: 20px auto;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            /* color: ghostwhite; */
            /* text-align: center; */
            background-color: aliceblue;
        }

        h2 {
            color: black;
        }
    </style>
</head>

<body>
    <h2>データの検索</h2>
    <p>品名を入力し、[検索]ボタンをクリックしてください<br>
        ※一部でも可</p>
    <br>
    <form action="/db/search" method="get">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" required>
            <input type="submit" value="検索" class="btn btn-outline-dark">
        </div>
    </form>

    <br><br>
    @isset($price)
    <p>検索条件 ➜ 品名[<span>{{$name}}</span>]</p>
    <a href="/" >戻る</a>

    <br><br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>品名</th>
            <th>価格</th>
        </tr>
        @foreach($price as $record)
        <tr>
            <td>{{$record->id}}</td>
            <td>{{$record->name}}</td>
            <td>{{$record->price}}</td>
        </tr>
        @endforeach
    </table>
    @endisset

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>