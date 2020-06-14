@extends('layout')
@section('content')

<h1>List of posts</h1>
    
<ul>
            @foreach ($posts as $p)
        <li>
        <h2><a href="{{route('posts.show',['post'=>$p->id])}}">{{$p->title}}</a></h2>
            <p>{{$p->content}}</p>
            <em>{{$p->created_at}}</em>
        </li>
            @endforeach
    
</ul>

@endsection