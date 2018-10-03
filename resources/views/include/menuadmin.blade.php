<div class="panel panel-default">
    <div class="panel-heading"><strong>Пользователи</strong></div>
    <div class="panel-body">
        <ul class="list-group">

            <li class="list-group-item"><a href="{{route('users')}}">

                    Пользователи</a> <span class="badge">{{$users_count}}</span></li>
            <li class="list-group-item"><a href="{{route('adduser')}}">Добавить полльзователя</a></li>
            <li class="list-group-item"><a href="{{route('role')}}">Роли пользователей</a></li>
            <li class="list-group-item"><a href="{{route('adduser')}}">Поиск</a></li>
        </ul>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading"><strong>Контент</strong></div>
    <div class="panel-body">
        <ul class="list-group">

            <li class="list-group-item"><a href="{{route('show.categores')}}">Категории</a></li>
            <li class="list-group-item"><a href="{{route('adduser')}}">Типы</a></li>
            <li class="list-group-item"><a href="{{route('adduser')}}">Статусы</a></li>
            <li class="list-group-item"><a href="{{route('adduser')}}">Объекты</a></li>
            <li class="list-group-item"><a href="{{route('adduser')}}">Районы</a></li>
        </ul>
    </div>
</div>
