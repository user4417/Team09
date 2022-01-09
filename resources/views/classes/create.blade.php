@extends('app')

@section('title', '新增一筆職業資料')

@section('creepytown_contents')
                <form method="post" action="/classes" accept-charset="UTF-8">
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
                        <tr><th>職業名稱</th>
                            <th><input name="cname" size="20" required maxlength="20" type="text" value=""/></th></tr>
                        <tr><th>輕鬆度</th>
                            <th>
                                <!input name="easy" type="number" value="" required/>
                                <select name="easy" required>
                                    @foreach($EasyLevel as $easy)
                                        <option value="{{$easy}}">{{$easy}}</option>
                                    @endforeach
                                </select>
                            </th></tr>
                        <tr><th>榮譽等級</th>
                            <th><input name="love" type="number" value="" required/></th></tr>
                        <tr><th>特有技能</th>
                            <th><input name="sp" type="text" value="" required/></th></tr>
                    </table>
                    <input type="submit" name="test" value="新增" />
                    <input type="reset" name="test2" value="重新輸入" />
                </form>
@endsection