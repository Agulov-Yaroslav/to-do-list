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
        <form class="mb-3" action="/add" method="post">
            <h2>Форма для создания новых задач</h2>
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Введите задачу</label>
                <input  class="form-control" name="task" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Введите описание задачи</label>
                <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Подтвердить</button>
        </form>
        <h2>Список задач</h2>
        <div class="list-group">
            @foreach($todos as $todo)

                <a href="\task\{{$todo->id}}" class="list-group-item list-group-item-action mb-2">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$todo->task}}</h5>
                        <small class="text-muted">{{$todo->created_at->format('d.m.Y')}}</small>
                    </div>
                    <p class="mb-1">{{$todo->body}}</p>
                </a>


            <div class="d-flex">
                    <form action="/task/do" method="post" class="mr-3">
                    @csrf
                    <input type="hidden" name="id" value="{{$todo->id}}">
                    <button type="submit" class="btn btn-success mb-3 mt-1" style="width: 110px">Выполнить!</button>
                    </form>


                    <a href="/task/{{$todo->id}}/update" class="btn btn-primary mb-3 mt-1" style="width: 110px">Изменить</a>

            </div>

                @endforeach
        </div>

    </div>
</div>

</body>
</html>
