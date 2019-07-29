@section('title', 'Customers')

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Customers</h1>
            <p><a href="customers/create">Add new customers</a></p>
        </div>
    </div>
   <hr>
    @foreach($customers as $customer)
        <div class="row">
            <div class="col-2">{{$customer -> id}}</div>
            <div class="col-4">
                <a href="/customers/{{$customer -> id}}">{{$customer -> name}}</a></div>
            <div class="col-4">{{$customer -> company -> name}}</div>
            <div class="col-2">{{$customer -> active}}</div>
        </div>
    @endforeach

@endsection