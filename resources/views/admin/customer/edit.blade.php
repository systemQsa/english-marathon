@extends('layouts.admin_layout')
@section('content')
<h1>edit customer</h1>

<form action="{{route('customers.update',$customer->id)}}"  method="POST" class="form-inline">
    @method('PUT')
    @csrf
    <div class="">
        <div class="form-group">
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control ml-3" value="{{ $customer->name}}">
        </div>
        <div class="form-group">
        <label for="email">email</label>
        <input type="email"  class="form-control ml-3" name="email" id="email"  value="{{ $customer->email}}">
        </div>
        <div class="form-group">
        <label for="phone">phone</label>
        <input type="text" name="phone" id="phone" class="form-control ml-3" value="{{ $customer->phone }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>


@endsection