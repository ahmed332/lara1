@extends('layouts.app')
@section('content')
    <h1>posts</h1>
    @if (count($post_table)>0)
    <div class="card">
        <ul class="list-group list-group-flush">
    @foreach ($post_table as $post)

                <li class="list-group-item"> <h3><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                    <small>written on {{ $post->created_at}}</small>

                </li>

    @endforeach
</ul>

</div>

    @endif
@endsection
