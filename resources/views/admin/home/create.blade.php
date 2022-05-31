@extends('layouts.admin_layout')
@section('content')
<h1>create New Comment</h1>

@if(session('status'))
   <h6 class="alert alert-success">{{session('status')}}</h6>
@endif

<form method="POST" action="{{route('feedbacks.store')}}" enctype="multipart/form-data">
    @csrf
    <select name="customer" id="customer" class="form-select w-75" style="oveflow:auto" aria-label="Default select example">
        @foreach($customers as $customer)
         <option value="{{$customer->id}}">{{$customer->name}}</option>
        @endforeach
    </select>
    <div class="form-group">
    <label for="comment">comment</label>
    
    <textarea name="feedback" id="feedback" rows="4" class="form-control w-95"></textarea>
    <input type="file" name="image">
    <div class="text-center"><button class=" btn btn-primary w-25 mt-3">Add</button></div>
    </div>
    
</form>
@endsection