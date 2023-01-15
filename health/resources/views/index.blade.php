<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Information</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: black;
            color: slategrey;
            text-align: center;
        }
        h3{
            color: ghostwhite;
        }
    </style>
</head>

<body>
    <h3>▼ Health Information ▼</h3>
    <p>-------------------------------------------------------------------</p>
    <form action="/health/calcHealth" method="post">
        @csrf
        Height (cm)<input type="number" name="userHeight" required>
        <br>
        Weight (kg)<input type="number" name="userWeight" required>
        <br><br>
        <input type="submit" value="Send">
    </form>
</body>

</html>