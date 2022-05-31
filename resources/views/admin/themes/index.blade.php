@extends('layouts.admin_layout')
@section('content')
<h1>themes</h1>
<a href="{{route('themes.create') }}"><button class="btn btn-primary">Create New Theme</button></a>
@foreach($themes as $theme)
 <h3>{{ $theme->title}}</h3>
 <h5>{{ $theme->text}}</h5>
 <a href="{{ route('themes.edit',$theme->id)}}"><button class="btn btn-warning">Edit</button></a>
 <a href=""><button class="btn btn-danger">Delete</button></a>
@endforeach
@endsection
