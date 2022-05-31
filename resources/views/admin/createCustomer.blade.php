@extends('layouts.admin_layout')
@section('content')


@if(session('status'))
   <h6 class="alert alert-success">{{session('status')}}</h6>
@endif

<form action="{{ route('customers.store')}}" method="POST" class="needs-validation" novalidate>
@csrf

<div class="form-group has-warning ml-3">
<label for="name">Name</label>
<input  class="form-control col-5" type="text" name="name"  id="name" required>
<div class="invalid-feedback">
          Please enter your name
        </div>
@error('name')
 <span class="error text-danger">{{ $message }}</span>
 @enderror
</div>
<div class="form-group ml-3">
<label for="phone">phone</label>
<input type="text" placeholder="phone" name="phone"  id="phone" class="form-control col-5" required>
<div class="invalid-feedback">
          Please enter your phone number
        </div>
@error('phone')
 <span class="error text-danger">{{ $message }}</span>
 @enderror
</div>
<div class="form-group ml-3">
<label for="email">email</label>
<input type="text" placeholder="email" name="email" id="email" class="form-control col-5" required>
<div class="invalid-feedback">
          Please enter your email
        </div>
@error('email')
 <span class="error text-danger">{{ $message }}</span>
 @enderror
</div>
    <div class="form-group text-center">
    <button class="btn btn-success" type="submit">Save</button>
    </div>
</form>

<script src="/js/validate.js">Script</script>
@endsection


