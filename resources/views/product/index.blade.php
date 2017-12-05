@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        product Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("product")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New product</button>
        </form>
    </div>
    <table>
        <thead>
            <th>name</th>
            <th>sku</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($products as $product) 
            <tr>
                <td>{!!$product->name!!}</td>
                <td>{!!$product->sku!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/product/{!!$product->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/product/{!!$product->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/product/{!!$product->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $products->render() !!}

</div>
@endsection