@section('title', 'Add new customer')

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Add customers list</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/customers" method="POST" class="pd-5">
            @include('customers.form')
            <button type="submit" class="btn btn-primary">add</button>
            </form>
        </div>
    </div>
@endsection