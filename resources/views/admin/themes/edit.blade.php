@extends('layouts.admin_layout')
@section('content')

<h1>Edit Theme and text</h1>
<form action="">
    <label for="title">Title</label>
    <input type="text"name="title" id="title" class="form-control" value="{{$theme->title}}">
    <label for="text">Text</label>
    <textarea name="text" class="form-control w-95">{{ $theme->text}}</textarea>
    <button class="btn btn-primary">Save</button>
    
</form>
@endsection