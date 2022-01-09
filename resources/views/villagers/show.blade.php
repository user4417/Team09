@extends('app')

@section('title', '創建一筆鎮民資料')

@section('creepytown_contents')
    <table border="1" bgcolor="white">
                    <tr>
                        <th>編號</th>
                        <th>名字</th>
                        <th>職業ID</th>
                        <th>性別</th>
                        <th>抗壓性</th>
                        <th>改造程度</th>
                        <th>魔化率</th>
                        <th>含鉛量</th>
                        <th>建立時間</th>
                        <th>編輯時間</th>
                    </tr>
                        <tr>
                            <th>{{$data->id}}</th>
                            <th>{{$data->name}}</th>
                            <th>{{$data->cid}}</th>
                            <th>{{$data->gender}}</th>
                            <th>{{$data->press}}%</th>
                            <th>{{$data->plus}}</th>
                            <th>{{$data->monster}}%</th>
                            <th>{{$data->lead}}%</th>
                            <th>{{$data->created_at}}</th>
                            <th>{{$data->updated_at}}</th>
                        </tr>
                </table>
                <a href="{{route('villagers.index')}}">返回</a>
@endsection