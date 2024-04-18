@extends('layout.layout')

@yield('title', 'login')

@section('content')
    <form action="{{ route('loginPost') }}" method="POST">

        @csrf

        <div class="username">
            <label for="">Username</label>
            <input type="text" name="username">
        </div>

        <div class="password">
            <label for="">password</label>
            <input type="password" name="password">
        </div>

        <div class="submit">
            <button type="submit">Login</button>
        </div>

    </form>
@endsection
