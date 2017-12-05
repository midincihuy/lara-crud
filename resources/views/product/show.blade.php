@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Show')
@section('content')

<div class = 'container'>
    <h1>
        Show product
    </h1>
    <form method = 'get' action = '{!!url("product")!!}'>
        <button class = 'btn blue'>product Index</button>
    </form>
    <table class = 'highlight bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <b><i>name : </i></b>
                </td>
                <td>{!!$product->name!!}</td>
            </tr>
            <tr>
                <td>
                    <b><i>sku : </i></b>
                </td>
                <td>{!!$product->sku!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection