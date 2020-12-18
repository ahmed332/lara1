@extends('layouts.app')
@section('content')
    <h1>edit post</h1>
    {!! Form::open(['action' => ['PostOur1@update',$posts->id], 'method'=>"POST"]) !!}
    <div class="form-group">
        {{ Form::label('title','Title') }}
        {{ Form::text('title',$posts->title,['class'=>'form-control','placeholder'=>'Title']) }}
    </div>
    <div class="form-group">
        {{ Form::label('body','Body') }}
        {{ Form::textarea('body',$posts->body,['class'=>'form-control','placeholder'=>'Body']) }}
    </div>
    {{
     Form::hidden('_method','PUT')
     }}
    {{ Form::submit("submit", ['class'=>'btn btn-primary']) }}
{!! Form::close() !!}
@endsection
