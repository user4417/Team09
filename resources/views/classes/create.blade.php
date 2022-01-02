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

                <form method="post" action="/classes" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                    <table border="1">
                        <tr>
                            <th>ID</th>
                            <th>
                            <select name="newid" required>
                                @foreach($unUsedId as $id)
                                    @if($id==-1)
                                        <option value="{{$id}}">新建ID</option>
                                    @else
                                        <option value="{{$id}}">{{$id}}</option>
                                    @endif
                                @endforeach
                            </select></th>
                        </tr>
                        <tr><th>職業名稱</th>
                            <th><input name="cname" size="20" required maxlength="20" type="text" value=""/></th></tr>
                        <tr><th>輕鬆度</th>
                            <th><input name="easy" type="number" value="" required/></th></tr>
                        <tr><th>榮譽等級</th>
                            <th><input name="love" type="number" value="" required/></th></tr>
                        <tr><th>特有技能</th>
                            <th><input name="sp" type="text" value="" required/></th></tr>
                    </table>
                    <input type="submit" name="test" value="新增" />
                    <input type="reset" name="test2" value="重新輸入" />
                </form>
            </div>
        </div>
    </body>
</html>
