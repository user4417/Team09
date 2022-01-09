@extends('app')

@section('title', '編輯一筆職業資料')

@section('creepytown_contents')
                <form method="post" action="/classes/{{$class->id}}" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <table border="1" bgcolor="white">
                        <tr><th>編號</th>
                            <th><input name="id" type="number" readonly value="{{$class->id}}"/></th></tr>
                        <tr><th>職業名稱</th>
                            <th>
                                <input name="cname" type="text" value="{{$class->name}}"/>
                            </th>
                        </tr>
                        <tr><th>輕鬆度</th>
                            <th><!input name="easy" type="number" value="{{$class->easy}}"/>
                                <select name="easy" required>
                                    @foreach($EasyLevel as $easy)
                                        <option value="{{$easy}}">{{$easy}}</option>
                                    @endforeach
                                </select>
                            </th></tr>
                        <tr><th>榮譽等級</th>
                            <th><input name="love" type="number" value="{{$class->love}}"/></th></tr>
                        <tr><th>特有技能</th>
                            <th><input name="sp" type="text" value="{{$class->sp}}"/></th></tr>
                    </table>
                    <input type="submit" name="test" id="test" value="修改" />
                    <input type="reset" name="test2" id="test2" value="重新輸入" />
                </form>
                <a href="/classes">返回</a>
@endsection
