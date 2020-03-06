@extends('app')

<h1>this is the services page</h1>

<form action="/service" method="post">
    @csrf
    <input type="text" name="name" autocomplete="off">
    <button type="submit">Add Service</button>
</form>

<strong>@error('name') {{ $message}} @enderror</strong>

<ul>
    @foreach ($services as $service)
        <li>{{ $service->name}}</li >
    @endforeach
</ul>
