@extends('layouts.admin_layout')
@section('content')

<h1>Create New Theme</h1>
<form action="">
    <label for="title">Title</label>
    <input type="text"name="title" id="title" class="form-control">
    <label for="text">Text</label>
    <textarea name="text" class="form-control w-95"></textarea>
    <button class="btn btn-primary">Save</button>
    
</form>
@endsection