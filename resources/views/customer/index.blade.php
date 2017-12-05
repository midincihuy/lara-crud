@extends('scaffold-interface.layouts.defaultMaterialize')
@section('title','Index')
@section('content')

<div class = 'container'>
    <h1>
        customer Index
    </h1>
    <div class="row">
        <form class = 'col s3' method = 'get' action = '{!!url("customer")!!}/create'>
            <button class = 'btn red' type = 'submit'>Create New customer</button>
        </form>
    </div>
    <table>
        <thead>
            <th>email</th>
            <th>name</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($customers as $customer) 
            <tr>
                <td>{!!$customer->email!!}</td>
                <td>{!!$customer->name!!}</td>
                <td>
                    <div class = 'row'>
                        <a href = '#modal1' class = 'delete btn-floating modal-trigger red' data-link = "/customer/{!!$customer->id!!}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn-floating blue' data-link = '/customer/{!!$customer->id!!}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn-floating orange' data-link = '/customer/{!!$customer->id!!}'><i class = 'material-icons'>info</i></a>
                    </div>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $customers->render() !!}

</div>
@endsection