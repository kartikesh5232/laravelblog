@extends('layouts.app')

@section('content')


<h1>Create Post</h1>
{!! Form::open(['action' => 'PostController@store','method'=>'POST']) !!}
    <div class="form-group">


{{Form::label('title', 'Title')}}
{{Form::text('title', '',['class'=>'form-control','placeholder'=>'Title'])}}

{{Form::label('body', 'Body')}}
{{Form::textarea('body', '',['id'=>'summary-ckeditor','class'=>'form-control','placeholder'=>'Body Text'])}}

    </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
