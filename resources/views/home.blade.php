@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/bloggs/public/post/create/">Create Post</a>
<h3>Your Blog Post</h3>
<table class="table table-striped">
    <tr>
        <th>Title</th>
        <th></th>
        <th></th>
    </tr>
    @foreach ($posts as $post)
    <tr>
    <th>{{$post->title}}</th>
    <th><a href="/bloggs/public/post/{{$post->id}}/edit" class="btn btn-default">Edit</a></th>
    <td>{!! Form::open(['action' => ['PostController@destroy',$post->id],'method'=>'POST']) !!}
  
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}</td>
    </tr>
        
    @endforeach

</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
