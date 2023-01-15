<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: black;
            color: ghostwhite;
             text-align: center; 
        }
        h3{
            color:slategray;
        }
    </style>
</head>

<body>
    <h3> Result ▽</h3>
    <table border="1">
        <tr>
            <th colspan="2">Health Information About You</th>
        </tr>
        <tr>
            <th>BMI</th>
            <td>{{$bmi}}</td>
        </tr>
        <tr>
            <th>Standard Weight</th>
            <td>{{$stdWeight}} kg</td>
        </tr>
    </table>
    <br><br>
    <a href="/">↻ Rerurn </a>
</body>

</html>