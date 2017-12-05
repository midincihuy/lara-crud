@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show customer
    </h1>
    <form method = 'get' action = '{!!url("customer")!!}'>
        <button class = 'btn blue'>customer Index</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>email : </i></b>
                </td>
                <td>{!!$customer->email!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$customer->name!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection