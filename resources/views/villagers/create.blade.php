@extends('app')

@section('title', '創建一筆鎮民資料')

@section('creepytown_contents')
    <form method="post" action="/villagers" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    {{ method_field('post') }}
                    <table border="1" bgcolor="white">
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
                        <tr><th>名字</th>
                            <th><input name="cname" type="text" value="" required/></th></tr>
                        <tr><th>職業ID</th>
                            <th>
                                <!input name="cid" type="number" value=""/>
                                <select name="cid" required>
                                    @foreach($class as $clas)
                                        <option value="{{$clas->id}}">{{$clas->name}}--{{$clas->id}}</option>
                                    @endforeach
                                </select>
                            </th>
                        </tr>
                        <tr><th>性別</th>
                            <th><input name="gender" type="text" value="" required/></th></tr>
                        <tr><th>抗壓性</th>
                            <th><input name="press" type="number" value="" required/></th></tr>
                        <tr><th>改造程度</th>
                            <th><input name=plus type="text" value="" required/></th></tr>
                        <tr><th>魔化率</th>
                            <th><input name="monster" type="number" value="" required/></th></tr>
                        <tr>
                            <th>含謙量</th>
                            <th><input name="lead" type="number" value="" required/></th>
                        </tr>
                    </table>
                    <input type="submit" name="test" value="新增" />
                    <input type="reset" name="test2" value="重新輸入" />
                </form>
@endsection
