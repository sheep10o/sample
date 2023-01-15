<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc Age</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: lightblue;
            color:slategrey;
            text-align: center;
        }
/* 
        h2 {
            color: black;
        }
        p {
            color: black;
        } */

    </style>
</head>

<body>
    <h2>▼ Calc Age ▼</h2>
    <p>-------------------------------------------------------------------</p>
    <form action="/userAge/calcAge" method="post">
        @csrf
        Name<input type="text" name="userName" required><br>
        Born Year<input type="number" name="born" required><br>
        
       <br> <br>
        <input type="submit" value="Calcation">
    </form>
</body>

</html>