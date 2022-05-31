@extends('layouts.admin_layout')

@section('content')
   <h1>Edit prices</h1>
   <form action="{{route('prices.update',$price->id)}}" method="POST" class="form-inline">
      <div class="container d-flex">
      @method('PUT')
      @csrf
      <label for="online_price">onlne price</label>
      <input type="text" name="online_price" id="online_price" value="{{$price->online_price}}" class="form-control">
      <label for="offline_price">offline price</label>
      <input type="text" name="offline_price" id="offline_price" value="{{$price->offline_price}}" class="form-control">
      <label for="discount">discount</label>
      <input type="text" name="discount" id="discount" value="{{ $price->discount}}" class="form-control">
      <button type="submit" class="btn btn-primary ml-3">Update</button>
</form>
<form action="{{ route('prices.destroy',$price->id)}}" method="POST">
   @method('DELETE')
   @csrf
   <button type="button" class="btn btn-danger ml-3" data-toggle="modal" data-target="#delete">Delete</button>
</form>
</div>

<!--Delete Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Delete Feedback</h4>
      </div>
    <form action="prices/{{ $price->id }}" method="POST">
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