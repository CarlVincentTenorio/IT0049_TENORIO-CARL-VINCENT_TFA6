@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
    <h1>Customer Accounts</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer['id'] }}</td>
                <td>{{ $customer['name'] }}</td>
                <td>{{ $customer['email'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection