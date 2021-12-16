<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body> <h3><a href="/villagers">Villagers</a><br/></h3>
    <body> <h3><a href="/classes/create">Create</a><br/></h3>
    <table border="1">
        <tr>




            <th>編號</th>
            <th>職業名稱</th>
            <th>輕鬆度</th>
            <th>操作1</th>
            <th>操作2</th>
            <th>操作3</th>
            <!--th>榮譽等級</th>
            <th>特有技能</th>
            <th>建立時間</th>
            <th>編輯時間</th-->
        </tr>
            @foreach($classes as $class)
                <tr>

                    <th>{{$class->id}}</th>
                    <th>{{$class->name}}</th>
                    <th>{{$class->easy}}</th>
                    <th><a href="/classes/{{$class->id}}">詳細</a></th>
                    <th><a href="/classes/{{$class->id}}/edit">修改</a></th>
                    <th>
                        <form action="/classes/{{ $class->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <input type="submit" value="刪除"/>
                        </form>
                    </th>
                </tr>
            @endforeach
    </table>
    </body>
</html>
