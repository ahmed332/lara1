@extends("layouts.app")
@section("content")
<h1>{{$title }}</h1>
<ul>
    {{ $title }}
    @foreach ($services as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>
@endsection
