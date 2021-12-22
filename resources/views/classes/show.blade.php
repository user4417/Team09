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
                <h1>Jamming Burgers</h1>

                <table border="1">
                    <tr>
                        <th>編號</th>
                        <th>職業名稱</th>
                        <th>輕鬆度</th>
                        <th>榮譽等級</th>
                        <th>特有技能</th>
                        <th>建立時間</th>
                        <th>編輯時間</th>
                    </tr>
                    <tr>
                        <th>{{$class->id}}</th>
                        <th>{{$class->name}}</th>
                        <th>{{$class->easy}}</th>
                        <th>{{$class->love}}</th>
                        <th>{{$class->sp}}</th>
                        <th>{{$class->created_at}}</th>
                        <th>{{$class->updated_at}}</th>
                    </tr>
                </table>

                <!--a href="/classes">返回</a-->
                <a href="{{route('classes.index')}}">返回</a>
                <h1>所有同行</h1>
                <table border="1">
                    <tr>
                        <th>編號</th>
                        <th>名字</th>
                        <!--th>職業ID</th-->
                        <th>性別</th>
                        <th>抗壓性</th>
                        <th>改造程度</th>
                        <th>魔化率</th>
                        <th>含鉛量</th>
                        <th>建立時間</th>
                        <th>編輯時間</th>
                    </tr>
                    @foreach($class->villagers as $vill)
                        <tr>
                            <th>{{$vill->id}}</th>
                            <th>{{$vill->name}}</th>
                            <!--th>{{$vill->cid}}</th-->
                            <th>{{$vill->gender}}</th>
                            <th>{{$vill->press}}%</th>
                            <th>{{$vill->plus}}</th>
                            <th>{{$vill->monster}}%</th>
                            <th>{{$vill->lead}}%</th>
                            <th>{{$vill->created_at}}</th>
                            <th>{{$vill->updated_at}}</th>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
