@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Edit')
@section('content')

<div class = 'container'>
    <h1>
        Edit product
    </h1>
    <form method = 'get' action = '{!!url("product")!!}'>
        <button class = 'btn blue'>product Index</button>
    </form>
    <br>
    <form method = 'POST' action = '{!! url("product")!!}/{!!$product->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="input-field col s6">
            <input id="name" name = "name" type="text" class="validate" value="{!!$product->
            name!!}"> 
            <label for="name">name</label>
        </div>
        <div class="input-field col s6">
            <input id="sku" name = "sku" type="text" class="validate" value="{!!$product->
            sku!!}"> 
            <label for="sku">sku</label>
        </div>
        <button class = 'btn red' type ='submit'>Update</button>
    </form>
</div>
@endsection