@extends('layouts.app')

@section('content')
<div class="container">
    <div class="home-content">
        <ul>
            <li><a href="{{ route('register_book') }}">本</a></li>
            <li><a href="{{ route('show_books') }}">覧</a></li>
        </ul>
    </div>
</div>
@endsection
