<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB practice</title>
     <link href=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" 
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">
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
    <h2>Preview</h2>
    <a href="/">Return to the top page.</a>
    <br><br><table class="table">
        <tr>
            <th>Number</th>
            <th>Contributer</th>
            <th>Posted date</th>
            <th>Posted content</th>
        </tr>
        @foreach($records as $record)
        <tr>
            <td>{{ $record ->id }}</td>
            <td>{{ $record ->user_name }}</td>
            <td>{{ $record -> created_at }}</td>
            <td>{{ $record -> posted_item }}</td>
        </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>

</body>

</html>