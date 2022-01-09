@extends('app')

@section('title', '編輯一筆鎮民資料')

@section('creepytown_contents')
    <form method="post" action="/villagers/{{$data->id}}" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <table border="1" bgcolor="white">
                        <tr><th>編號</th>
                            <th><input name="id" type="number" readonly value="{{$data->id}}"/></th></tr>
                        <tr><th>名字</th>
                            <th><input name="cname" type="text" value="{{$data->name}}"/></th></tr>
                        <tr><th>職業ID</th>
                            <th>
                                <!input name="cid" type="number" value="{{$data->cid}}"/>
                                <select name="cid">
                                @foreach($class as $clas)
                                    <option value="{{$clas->id}}">{{$clas->name}}--{{$clas->id}}</option>
                                @endforeach
                                </select>
                            </th>
                        </tr>
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
@endsection
