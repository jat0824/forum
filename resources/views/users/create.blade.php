@extends('layouts.default')
@section('title', '注册')

@section('content')
    <div class="offset-md-2 col-md-8">
        <div class="card ">
            <div class="card-header">
                <h5>注册</h5>
            </div>
            <div class="card-body">

                @include('shared._errors')

                <form method="POST" action="{{ route('users.store') }}">
                    {{ csrf_field() }}
                    {{--在使用 POST 方法提交表单时，Laravel 为了安全考虑，会让我们提供一个 token（令牌）来防止我们的应用受到 CSRF（跨站请求伪造）的攻击。
                        因此需要添加csrf_field()方法--}}
                    {{-- 转换为html：<input type="hidden" name="_token" value="fhcxqT67dNowMoWsAHGGPJOAWJn8x5R5ctSwZrAq">--}}

                    <div class="form-group">
                        <label for="name">用户名：</label>
                        {{--Laravel 提供了全局辅助函数 old 来帮助我们在 Blade 模板中显示旧输入数据。
                        这样当我们信息填写错误，页面进行重定向访问时，输入框将自动填写上最后一次输入过的数据。--}}
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">邮箱：</label>
                        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">密码：</label>
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">确认密码：</label>
                        <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">注册</button>
                </form>
            </div>
        </div>
    </div>
@stop