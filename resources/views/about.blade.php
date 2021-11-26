@extends('layouts.app')

@section('content')
<div class="card">
<div class="card-body">
    <div class="card">
        <div class="card-header">
            <center><img src="{{ $image }}" alt="Foto Rio" width="10%"></center>
        <div class="card-body">
            <center><h5>{{ $name }}</h5></center>
            <center><h5>{{ $email }}</h5></center>
        </div>
    </div>
</div>

@endsection


