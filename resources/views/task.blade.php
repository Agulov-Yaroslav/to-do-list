<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Задача</title>
</head>
<body>
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">{{$task->task}}</h1>
        <h2 class="lead m-3">{{$task->body}}</h2>
        <p class="lead">
            <a class="btn btn-primary btn-lg mt-3" href="#" role="button">Learn more</a>
        </p>
    </div>

</div>

</body>
</html>
