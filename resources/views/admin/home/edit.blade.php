@extends('layouts.admin_layout')
@section('content')
<h1>edit Feedback</h1>
<form method="POST" action="{{ route('feedbacks.update',$feedback->id)}}">
@csrf  
@method('PUT')
 
  <label for="comment"></label>
 
  <textarea name="comment" id="comment" cols="30" rows="5" class="form-control">{{ $feedback->comment }}</textarea>
  <div class="conteiner d-flex">
  <button type="submit" class="btn btn-primary">Update</button>
</form>
<a href="{{route('feedbacks.index')}}"><button class="btn btn-secondary ml-1">Back</button></a>
</div>
@endsection

