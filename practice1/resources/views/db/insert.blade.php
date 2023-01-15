<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規データの登録</title>
    <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            width: 300px;
            margin: 0 auto; 
            /* font-family: Verdana, Geneva, Tahoma, sans-serif; */
            font-family: fantasy;
            /* color: ghostwhite; */
            /* text-align: center;  */
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <br>
    <h1>新規データの登録</h1>
    <br>
    <form action="/db/store" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">品名</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">価格</label>
            <!-- <textarea class="form-control" id="price" name="price" rows="3" required></textarea>  -->
            <input type="number" class="form-control" id="price" name="price" required> 
   
        </div>
        <br>
        <input type="submit" value="送信" class="btn btn-outline-warning">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>