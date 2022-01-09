@extends('app')

@section('title', '創建一筆鎮民資料')

@section('creepytown_contents')
    <h3><a href="{{route('villagers.create')}}">新增資料</a></h3>
    <a href="{{route('villagers.index')}}"> 全部</a>
    <a href="{{route('villagers.lead1')}}"> 微含謙</a>
    <a href="{{route('villagers.lead2')}}"> 中含謙</a>
    <a href="{{route('villagers.lead3')}}"> 高含謙</a>
    <br/>
                <table border="1" bgcolor="white">
                    <tr>
                        <th>編號</th>
                        <th>名字</th>
                        <th>職業ID</th>
                        <th>含謙量</th>
                        <th>操作1</th>
                        <th>操作2</th>
                        <th>操作3</th>
                        <!--th>性別</th>
                        <th>抗壓性</th>
                        <th>改造程度</th>
                        <th>魔化率</th>
                        <th>含鉛量</th>
                        <th>建立時間</th>
                        <th>編輯時間</th-->
                    </tr>
                    @foreach($villagers as $vill)
                        <tr>
                            <th>{{$vill->id}}</th>
                            <th>{{$vill->name}}</th>
                            <th>{{$vill->myclass->id}}</th>
                            <th>{{$vill->lead}}%</th>
                            <th><a href="/villagers/{{$vill->id}}">詳細</a></th>
                            <th><a href="/villagers/{{$vill->id}}/edit">修改</a></th>
                            <th><form action="/villagers/{{ $vill->id }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <input type="submit" value="刪除"/>
                            </form></th>
                        </tr>
                    @endforeach
                </table>
@endsection