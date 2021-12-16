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
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <form method="post" action="/classes/{{$class->id}}" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <table border="1">
                        <tr><th>編號</th>
                            <th><input name="id" type="number" readonly value="{{$class->id}}"/></th></tr>
                        <tr><th>職業名稱</th>
                            <th>
                                <input name="cname" type="text" value="{{$class->name}}"/>
                            </th>
                        </tr>
                        <tr><th>輕鬆度</th>
                            <th><input name="easy" type="number" value="{{$class->easy}}"/></th></tr>
                        <tr><th>榮譽等級</th>
                            <th><input name="love" type="number" value="{{$class->love}}"/></th></tr>
                        <tr><th>特有技能</th>
                            <th><input name="sp" type="text" value="{{$class->sp}}"/></th></tr>
                    </table>
                    <input type="submit" name="test" id="test" value="修改" />
                    <input type="reset" name="test2" id="test2" value="重新輸入" />
                </form>
                <a href="/classes">返回</a>
            </div>
        </div>
    </body>
</html>
