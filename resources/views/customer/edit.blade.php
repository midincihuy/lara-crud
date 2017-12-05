@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit customer
    </h1>
    <form method = 'get' action = '{!!url("customer")!!}'>
        <button class = 'btn blue'>customer Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("customer")!!}/{!!$customer->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="email" name = "email" type="text" class="validate" value="{!!$customer->
            email!!}"> 
            <label for="email">email</label>
        </div>
        <div class="input-field col s6">
            <input id="name" name = "name" type="text" class="validate" value="{!!$customer->
            name!!}"> 
            <label for="name">name</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection