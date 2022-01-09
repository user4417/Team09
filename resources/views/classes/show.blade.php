@extends('app')

@section('title', '一筆詳細職業資料')

@section('creepytown_contents')


                <table border="1" bgcolor="white">
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
@endsection
