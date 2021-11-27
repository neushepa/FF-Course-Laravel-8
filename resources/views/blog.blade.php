@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
        @foreach ($post as $p)
        <div class="card">
            <div class="card-header">
            <a href="/post/{{ $p['slug'] }}"><h3>{{ $p['title'] }}</a></h3>
            <h5>Author : {{ $p->user->name }}</h5>
            </div>
            <div class="card-body">
            <p>{{ $p->expert }}</p>
            </div>
        </div>
        @endforeach
</div>
</div>
@endsection
