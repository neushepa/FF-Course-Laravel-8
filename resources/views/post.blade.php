@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
        <div class="card">
            <div class="card-header">
            <h3>{{ $post->title }}</h3>
            <h5>Author : {{ $post->user->name }}</h5>
            </div>
            <div class="card-body">
            <p>{!! $post->body !!}</p>
            </div>
        </div>
</div>
@endsection
