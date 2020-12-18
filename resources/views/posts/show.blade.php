@extends('layouts.app')
@section('content')
    <a href="/posts">go back</a>
    <h1>{{ $posts->title }}</h1>
    <p>{{ $posts ->body }}</p>

    <small>written of {{ $posts->created_at }}</small>
    <hr>
    <a href="/posts/{{ $posts->id }}/edit" class='btn btn-default'>Edit</a>

   {!! Form::open(['action' =>["PostOur1@destroy",$posts->id],'method'=>"DELETE",'class'=>"pull-right"]) !!}
   {{ Form::hidden('_method', 'DELETE' )}}
   {{ Form::submit("delete"),['class'=>'btn btn-danger'] }}
   {!! Form::close() !!}

@endsection
