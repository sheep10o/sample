<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currently Age</title>
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background-color: lightblue;
            color: black;
            text-align: center;
        }

        h2 {
            color: ghostwhite;
        }
    </style>
</head>

<body>
    <h2>Calc Result</h2>
    <div style="text-align:center">
    <table border="1">
        <tr>
            <th colspan="2">{{$name}} 's Information</th>
        </tr>
        <tr>
            <th>Born Year</th>
            <td>{{$born}} year.</td>
        </tr>
        <tr>
            <th>Current AD</th>
            <td>{{$thisYear}}</td>
        </tr>
        <tr>
            <th>Current Age</th>
            <td>{{$age}} years old.</td>
        </tr>
    </table>
    </div>
    <br>
    <a href="/">Go back to the top page.</a>
</body>

</html>