@extends('admin.layout')

@section('content')
  {{ Form::open(['route' => 'login_post']) }}
    {{ Form::label('name', 'ユーザー名') }}
    {{ Form::text('email', null) }}
    @error('email')
      {{ $message }}
    @enderror

    {{ Form::label('password', 'パスワード') }}
    {{ Form::password('password') }}
    @error('password')
      {{ $message }}
    @enderror

    <button type="submit">ログイン</button>
  {{ Form::close() }}
@endsection
