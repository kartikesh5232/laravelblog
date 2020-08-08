@extends('layouts.app')

@section('content')
    
<a href="/bloggs/public/post" class="btn btn-light">Go Back</a>
<h1>{{$post->title}}</h1>

<div>
    {!!$post->body!!}
</div>
<hr>
<small>created on {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
@if (!Auth::guest())
 @if (Auth::user()->id==$post->user_id)
     

<a href="/bloggs/public/post/{{$post->id}}/edit" class="btn btn-default">Edit</a>

{!! Form::open(['action' => ['PostController@destroy',$post->id],'method'=>'POST']) !!}
  
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!! Form::close() !!}
@endif 
@endif
@endsection

