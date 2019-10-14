@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <h2>Customers</h2>
    <p><a class="no-dec" href="{{ route('customers.create') }}">Add new Customer</a></p>
    <ul>
        @forelse ($customers as $customer)
            <li><strong>{{ $customer->name }}</strong> &nbsp; -> {{ $customer->email }}</li> 
        @empty
            <p>No customers yet.</p>
        @endforelse
    </ul>
@endsection