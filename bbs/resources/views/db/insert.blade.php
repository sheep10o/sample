<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            /* color: ghostwhite; */
            /* text-align: center; */
            background-color: lightblue;

            width: 800px;
            margin: 0 auto;
        }
    </style>
</head>

<body>

    <br><br>
    <h2>Data Register</h2>

    <form action="/db/store" method="post">
        @csrf
        <div class="mb-3">
            <label for="user_name" class="form-label">Posted user_name</label>
            <input type="text" class="form-control" id="user_name" name="user_name" required>
        </div>

        <div class="mb-3">
            <label for="posted_item" class="form-label">Posted news</label>
            <textarea class="form-control" id="posted_item" name="posted_item" row="3" required></textarea>
        </div>
        <input type="submit" value="Register" class="btn btn-primary">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>