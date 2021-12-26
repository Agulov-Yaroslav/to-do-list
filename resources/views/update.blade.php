<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Главная</title>
</head>
<body>
<div class="container">
    <div class="jumbotron w=100">
        <form class="mb-3" action="/task/update" method="post">
            <h2>Форма для редактирования задач</h2>
            @csrf
            <input type="hidden" name="id" value="{{$task->id}}">
            <div class="form-group">
                <label for="exampleInputEmail1">Введите задачу</label>
                <input  class="form-control" name="task" id="exampleInputEmail1" value="{{$task->task}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Введите описание задачи</label>
                <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3" >{{$task->body}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Подтвердить</button>
        </form>

    </div>
</div>

</body>
</html>
