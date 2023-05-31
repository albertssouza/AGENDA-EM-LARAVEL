@extends('layouts.template')
@section('title', 'home')
@section('content')

<div>
    @foreach($users as $user)

        {{$user->nome}}

    @endforeach
</div>





@endsection