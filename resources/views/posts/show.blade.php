@extends('layouts.master')

@section('content')    
    <div class="col-sm-8 blog-main">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>   
    
        @if(count($post->comments) != 0)
            <hr>

            <div class="comments">
                <ul class="list-group">
                    @foreach($post->comments as $comment)
                        <li class="list-group-item">
                            <strong class="pull-right"> {{$comment->created_at->diffForHumans() }}: </strong>                  
                            {{ $comment->body }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <hr>

        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <textarea  class="form-control" id="body" name="body" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Post Comment</button>
                    </div>

                    @include('errors.validation')
                </form>
            </div>
        </div>


    </div><!-- /.blog-main -->  
@endsection