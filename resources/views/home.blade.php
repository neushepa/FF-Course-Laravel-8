@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <div class="alert alert-success" role="alert">
    {{ session('status') }}
    <center><h1>Fathforce Starter Kits 2021</h1></center>
    </div>
</div>
</div>
@endsection
