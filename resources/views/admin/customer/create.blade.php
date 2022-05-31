@extends('layouts.admin_layout')
@section('content')

@if(session('status'))
   <h6 class="alert alert-success">{{session('status')}}</h6>
@endif

<form method="POST" action="{{ route('customers.store')}}" >
@csrf
@method('PUT')
<div class="form-group">
<label for="name">Name</label>
<input type="text" placeholder="name" name="name"  id="name" class="form-controll" >
    @if($errors->any())
      <span class="text-danger">{{ $errors->all()}}</span>
    @endif
</div>
<div class="form-group">
<label for="phone">phone</label>
<input type="text" placeholder="phone" name="phone"  id="phone" class="form-controll" >
@if($errors->has('phone'))
      <span class="text-danger">{{ $errors->first('phone')}}</span>
    @endif
</div>
<div class="form-group">
<label for="email">email</label>
<input type="text" placeholder="email" name="email" id="email" class="form-controll" >
@if($errors->has('email'))
      <span class="text-danger">{{ $errors->first('email')}}</span>
    @endif
</div>
    <div class="form-group text-center">
    <button class="btn btn-success" type="submit">Save</button>
    </div>
</form>
@endsection