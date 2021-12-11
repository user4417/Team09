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
                <form method="post" action="/villagers/{{$data->id}}" accept-charset="UTF-8">
                    @csrf
                    @method('put')
                    {!! csrf_field() !!}
                    <table border="1">
                        <tr><th>編號</th>
                            <th><input name="id" type="number" readonly value="{{$data->id}}"/></th></tr>
                        <tr><th>名字</th>
                            <th><input name="cname" type="text" value="{{$data->name}}"/></th></tr>
                        <tr><th>職業ID</th>
                            <th><input name="cid" type="number" value="{{$data->cid}}"/></th></tr>
                        <tr><th>性別</th>
                            <th><input name="gender" type="text" value="{{$data->gender}}"/></th></tr>
                        <tr><th>抗壓性</th>
                            <th><input name="press" type="number" value="{{$data->press}}"/></th></tr>
                        <tr><th>改造程度</th>
                            <th><input name=plus type="text" value="{{$data->plus}}"/></th></tr>
                        <tr><th>魔化率</th>
                            <th><input name="monster" type="number" value="{{$data->monster}}"/></th></tr>
                        <tr><th>含鉛量</th>
                            <th><input name="lead" type="number" value="{{$data->lead}}"/></th></tr>
                    </table>
                    <input type="submit" name="test" id="test" value="修改" />
                    <input type="reset" name="test2" id="test2" value="重新輸入" />
                </form>

                <a href="/villagers">返回</a>
            </div>
        </div>
    </body>
</html>
