@section('title', 'Edit customer' .$customer -> name)

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit for {{$customer -> name}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/customers/{{$customer -> id}}" method="POST" class="pd-5">
                @method('PATCH')
                @include('customers.form')
                <button type="submit" class="btn btn-primary">Save customer</button>
            </form>
        </div>
    </div>
@endsection