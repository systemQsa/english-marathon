@extends('layouts.admin_layout')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<a href="{{ route('customers.create')}}"><button>Add customer</button></a>
<table class="table table-dark">
 <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customers as $customer)
    <tr>
    <th scope="row">{{ $customer->id}}</th>
      <td>{{ $customer->name}}</td>
      <td>{{ $customer->email}}</td>
      <td>{{$customer->phone}}</td>
      <td><a href="customers/{{$customer->id}}/edit"><button class="btn btn-warning btn-sm">Edit</button></a></td>
      <form action="{{route('customers.destroy',$customer->id)}}" method="POST">
      @method('DELETE')
      @csrf
      <td><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete">Delete</button></td>
      </form>
    </tr>
    @endforeach
  </tbody>
 </table>
 <div class="d-flex justify-content-center">
  {{ $customers->links() }}
  </div>

  <!--Delete Modal -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel">Delete Feedback</h4>
      </div>
    <form action="customers/{{ $customer->id }}" method="POST">
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
 
 
