@extends('app')

@section('title', '顯示職業資料')

@section('creepytown_contents')
    <h3><a href="{{route('classes.create')}}">新增資料</a></h3><br/>
    <a href="{{route('classes.index')}}"> 全部</a>
    <a href="{{route('classes.easy')}}"> 輕鬆職業</a>
    <a href="{{route('classes.hard')}}"> 困難職業</a>
    <br/>
    <table border="1" bgcolor="white">
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
@endsection
