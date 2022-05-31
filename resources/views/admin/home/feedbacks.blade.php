@extends('layouts.admin_layout')

@section('content')

    <h1>All feedbacks</h1>
    <a href="{{ route('feedbacks.create')}}"><button class="btn btn-success">Create</button></a>
    <a href="{{route('homeAdmin')}}"><button class="btn btn-primary">Back to Panel</button></a>
    <!--display all info + buttons edit and delete -->
    @foreach($feedbacks as $feedback)
    <div class="container">
      <div class=" p-4  w-100">
          <h4>{{ $feedback['comment']}}</h4>
          <h5>Autor:  {{ $feedback->customer['name']}}</h5>
          <h6>{{ Carbon\Carbon::parse($feedback->updated_at)->format('d-m-Y') }}</h6>
          <h6><img src="{{ asset('uploads/images/'.$feedback->image) }}" width="70px"  height="70px" alt="image"></h6>
          <div class="float-right d-flex  align-items-center">
          <a href="feedbacks/{{$feedback->id}}/edit"><button class="btn btn-warning btn-sm" >Edit</button></a>
            <form  method="POST"action="feedbacks/{{$feedback->id }} ">
              @csrf
              @method('DELETE')
              <button type="button" class="btn btn-danger btn-sm ml-3" data-toggle="modal" data-target="#delete">Delete</button>
            </form>
      </div>
        </div>
       
     
    </div>
    
    <hr>
    @endforeach
    <!--  Form to update-->
              <form action="{{route('feedbacks.update',$feedback->id)}}" method="POST">
                @method('PUT')
                @csrf
                  <label for="comment">comment</label>
                  <input type="text" name="comment" value="{{ $feedback->comment}}">
                  <button type="submit">update</button>
              </form>

<!--Delete Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Delete Feedback</h4>
      </div>
    <form action="feedbacks/{{ $feedback->id }}" method="POST">
      @csrf 
      @method('DELETE')
      <div class="modal-body">
        <h4>Do you want to delete?</h4>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="#" class="btn btn-primary">Delete</button>
      </div>
    </form>
    </div>

  </div>

</div>
 @endsection



