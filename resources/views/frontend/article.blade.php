<!--
|--------------------------------------------------------------------------
| resources/views/frontend/article.blade.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
-->
@extends('layouts.frontend') <!-- Lecture 5  -->

@section('content') <!-- Lecture 5  -->
<div class="container">

    <h1>Article <small>o obiekcie: <a href="{{ route('object',['id'=>$article->object->id]/* Lecture 22 */) }}">{{ $article->object->name /* Lecture 22 */ }}</a></small></h1>
    <p>{{ $article->content /* Lecture 22 */ }}</p>


    <a class="btn btn-primary top-buffer" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Article is liked <span class="badge">{{ $article->users->count() /* Lecture 22 */ }}</span>
    </a>
    <div class="collapse" id="collapseExample">
        <div class="well">

            <ul class="list-inline">
                @foreach( $article->users as $user ) <!-- Lecture 22 -->
                    <li><a href="{{ route('person',['id'=>$user->id]/* Lecture 22 */) }}"><img title="{{ $user->FullName /* Lecture 22 */ }}" class="media-object img-responsive" width="50" height="50" src="{{ $user->photos->first()->path ?? $placeholder /* Lecture 22 */ }}" alt="..."> </a></li>

                @endforeach <!-- Lecture 22 -->
            </ul>


        </div>
    </div>

    <h3>Comments</h3>

    @foreach( $article->comments as $comment ) <!-- Lecture 22 -->
        <div class="media">
            <div class="media-left media-top">
                <a href="{{ route('person',['id'=>$comment->user->id]/* Lecture 22 */) }}">
                    <img class="media-object" width="50" height="50" src="{{$comment->user->photos->first()->path ?? $placeholder}}" alt="...">
                </a>
            </div>
            <div class="media-body">
               {{ $comment->content /* Lecture 22 */ }}
            </div>
        </div>
        <hr>
    @endforeach <!-- Lecture 22 -->

    <a href="#" class="btn btn-primary btn-xs">Like this article</a><br><br>

    <a class="btn btn-primary" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
        Add comment
    </a>
    <div class="collapse" id="collapseExample2">
        <div class="well">


            <form method="POST" class="form-horizontal">
                <fieldset>

                    <div class="form-group">
                        <label for="textArea" class="col-lg-2 control-label">Comment</label>
                        <div class="col-lg-10">
                            <textarea required name="content" class="form-control" rows="3" id="textArea"></textarea>
                            <span class="help-block">Add a comment about this article.</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>


</div>
@endsection <!-- Lecture 5  -->



