@extends('layouts.app')

@section('content')


<h3>Posts</h3>


    
@if (count($posts)>0)

@foreach ($posts as $post)

<div>

<h3><a href="/bloggs/public/post/{{$post->id}}">{{$post->title}}</a></h3>
<small>created on {{$post->created_at}} by {{$post->user->name}}</small>

</div>
    
@endforeach
{{$posts->links()}}
    
@else


<p>No Post Found</p>

@endif
    
@endsection